<?php

namespace App\Http\Controllers;

use App\Mail\EmailVerification;
use App\Mail\ForgotPassword;
use App\Models\Admin;
use App\Models\User;
use App\Models\Verifiedaccount;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

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

    public function register(Request $request) {
        $rules = [
            'name' => 'required|max:30',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:9|max:20',
            'address' => 'required',
            'telephone' => 'required',
        ];
        $messages = [
            'required' => 'Data :attribute harus diisi.',
            'email' => 'Data email harus sesuai dengan format email',
            'min' => 'Data :attribute harus memiliki panjang minimal :min karakter.',
            'max' => 'Data :attribute harus memiliki panjang maximal :max karakter.',
            'unique' => ':attribute sudah terdaftar sebelumnya',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        
        if($validator->fails()) {
            return redirect()->route('auth.signup')->withErrors($validator)->withInput();
        } 
        $token = hash('sha256', $request->password.$request->telephone);
        $user = User::create($validator->validated());
        Verifiedaccount::create([
            'user_id' => $user->id,
            'token' => $token,
            'isVerified' => false,
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
        if(!$user){
            return redirect()->route('auth.signin')
                    ->with('warning', 'Link anda tidak valid!');
        }elseif($user->verifiedaccount->token != $token){
            return redirect()->route('auth.signin')
                    ->with('warning', 'Link anda tidak valid!');
        }else {
            $user->verifiedaccount->isVerified = true;
            $user->verifiedaccount->save();
            return redirect()->route('auth.signin')->with('success', 'Email anda telah diverifikasi. Silahkan login kedalam aplikasi');
        }
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

    public function sendMailChangePassword(Request $request) {
        $rules = [
            'email' => ['required','email'],
        ];
        $messages = [
            'required' => 'Data :attribute harus diisi.',
            'email' => 'Data email harus sesuai dengan format email',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect()->route('auth.forgot')->withErrors($validator)->withInput();
        }
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return redirect()->route('auth.forgot')
                ->withErrors(['email' => 'Email belum terdaftar, lakukan registrasi terlebih dahulu.'])
                ->withInput();
        }
        $token = hash('sha256', $user->password.$user->telephone);
        $verifiedaccount = $user->verifiedaccount;
        $verifiedaccount->token = $token;
        $verifiedaccount->save();
        Mail::to($request->email)->send(new ForgotPassword($user->email, $token));
        return redirect()->route('auth.signin')->with('success', 'Verifikasi berhasil dilakukan. Silahkan ubah password anda dengan melakukan klik pada link yang kami kirimkan pada email anda');
    }

    public function changePassword($email, $token) {
        $user = User::where('email', $email)->first();
        if(!$user){
            return redirect()->route('auth.signin')
                    ->with('warning', 'Link anda tidak valid!');
        }elseif($user->verifiedaccount->token != $token){
            return redirect()->route('auth.signin')
                    ->with('warning', 'Link anda tidak valid!');
        }else {
            return view('change', [
                'title' => 'Change Password',
                'question' => '',
                'action' => '',
                'url' => '',
                'post' => route('auth.changepassword', ['email' =>$user->email])
            ]);
        }
    }

    public function change(Request $request, $email) {
        $rules = [
            'password' => ['required'],
            'confirmpassword' => ['required', 'same:password']
        ];
        $messages = [
            'required' => 'Data :attribute harus diisi.',
            'same' =>  ':attribute harus sama dengan :other',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::where('email', $email)->first();
        $user->password = $request->password;
        $user->save();
        return redirect()->route('auth.signin')->with('success', 'Password anda berhasil diubah, silahkan lakukan login!');
    }

    public function login(Request $request) {
        $rules = [
            'email' => ['required','email'],
            'password' => ['required'],
        ];
        $messages = [
            'required' => 'Data :attribute harus diisi.',
            'email' => 'Data email harus sesuai dengan format email',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect()->route('auth.signin')->withErrors($validator)->withInput();
        }
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return redirect()->route('auth.signin')
                ->withErrors(['email' => 'Email belum terdaftar, lakukan registrasi terlebih dahulu.'])
                ->withInput();
        }
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            if(!$user->verifiedaccount->isVerified) {
                Auth::logout();
                request()->session()->invalidate();
                request()->session()->regenerateToken();
                return redirect()->route('auth.signin')
                    ->with('warning', 'Email anda belum diverifikasi. Lakukan verifikasi terlebih dahulu!')
                    ->withInput();
            } else {
                $request->session()->regenerate();
                return redirect()->route('main.index');
            }
        } else {
            return redirect()->route('auth.signin')
                ->withErrors(['password' => 'Kata Sandi yang dimasukkan salah. Coba lagi'])
                ->withInput();
        }
    }

    public function logout() { 
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('auth.signin')->with('success', 'Anda telah berhasil keluar dari akun ini');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
