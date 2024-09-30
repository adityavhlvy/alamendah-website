<?php

namespace App\Http\Controllers;

use App\Helpers\ValidLinkAuthentication;
use App\Http\Requests\ShowUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserPasswordRequest;
use App\Http\Requests\UpdateUserRequest;

use App\Mail\EmailVerification;
use App\Mail\ForgotPassword;

use App\Models\Admin;
use App\Models\User;
use App\Models\Verifiedaccount;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signin() {
        return view('signin', [
            'title' => 'Sign In',
            'question' => 'Dont have account?',
            'action' => 'Sign Up Here',
            'url' => route('auth.signup'),
            'post' => route('auth.login'),
        ]);
    }
    
    public function signup() {
        return view('signup', [
            'title' => 'Sign Up',
            'question' => 'Already have account?',
            'action' => 'Sign In Here',
            'url' => route('auth.signin'),
            'post' => route('auth.register')
        ]);
    }

    public function register(StoreUserRequest $request) {
        $token = hash('sha256', $request->password.$request->telephone.$request->email);
        $request->merge(['isOnline' => false]);
        $user = User::create($request->all());

        Verifiedaccount::create([
            'user_id' => $user->id,
            'token' => $token,
            'isVerified' => false,
            'isChanged' => true,
        ]);

        Admin::create([
            'user_id' => $user->id,
            'isAdmin' => false,
        ]);

        Mail::to($request->email)->send(new EmailVerification($request->email, $token));
        
        return redirect()->route('auth.signin')->with('success', 'Email anda sudah terdaftar. Silahkan verifikasi di email anda');
    }

    public function verify($email, $token) {
        $user = User::where('email', $email)->first();
        
        $redirect = ValidLinkAuthentication::checkValidationVerificationEmailRoutes($user, $token);
        if($redirect) {
            return $redirect;
        }
        
        $user->verifiedaccount->isVerified = true;
        $user->verifiedaccount->save();
        
        return redirect()->route('auth.signin')->with('success', 'Email anda telah diverifikasi. Silahkan login kedalam aplikasi');
    }

    public function forgotPassword() {
        return view('forgot', [
            'title' => 'Forgot Password',
            'question' => 'Dont have account?',
            'action' => 'Sign Up Here',
            'url' => route('auth.signup'),
            'post' => route('auth.send-mail')
        ]);
    }

    public function sendMailChangePassword(UpdateUserRequest $request) {
        $user = User::where('email', $request->email)->first();
        $verifiedaccount = $user->verifiedaccount;
        $token = hash('sha256', $user->password.$verifiedaccount->token);
        
        $verifiedaccount->token = $token;
        $verifiedaccount->isChanged = false;
        $verifiedaccount->save();

        Mail::to($request->email)->send(new ForgotPassword($user->email, $token));
        
        return redirect()->route('auth.signin')->with('success', 'Verifikasi berhasil dilakukan. Silahkan ubah password anda dengan melakukan klik pada link yang kami kirimkan pada email anda');
    }

    public function changePassword($email, $token) {
        $user = User::where('email', $email)->first();
        
        $redirect = ValidLinkAuthentication::checkValidationUpdatePasswordRoutes($user, $token);
        if($redirect) {
            return $redirect;
        }

        return view('change', [
            'title' => 'Change Password',
            'question' => '',
            'action' => '',
            'url' => '',
            'post' => route('auth.changepassword', ['email' =>$user->email])
        ]);
    }

    public function change(UpdateUserPasswordRequest $request, $email) {
        $user = User::where('email', $email)->first();
        $user->password = $request->password;
        $user->save();

        $verifiedaccount = $user->verifiedaccount;
        $verifiedaccount->isChanged = true;
        $verifiedaccount->save();
        return redirect()->route('auth.signin')->with('success', 'Password anda berhasil diubah, silahkan lakukan login!');
    }

    public function login(ShowUserRequest $request) {
        $redirect = verified($request->email);
        if($redirect) {
            return $redirect;
        }

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $user = User::where('email', $request->email)->first();
            $user->isOnline = true;
            $user->save();

            $request->session()->regenerate();
            return redirect()->route('main.index');
        }
        return redirect()->route('auth.signin')
            ->withErrors(['password' => 'Kata Sandi yang dimasukkan salah. Coba lagi'])
            ->withInput();
    }

    public function logout() { 
        $user = User::where('id', Auth::user()->id)->first();
        $user->isOnline = false;
        $user->save();

        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('auth.signin')->with('success', 'Anda telah berhasil keluar dari akun ini');
    }
}
