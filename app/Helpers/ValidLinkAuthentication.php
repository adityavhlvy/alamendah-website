<?php
namespace App\Helpers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;

class ValidLinkAuthentication {
  public static function checkValidationUpdatePasswordRoutes(?User $user, string $token): ?RedirectResponse
  {
    if(!$user){
      return redirect()->route('auth.signin')
        ->with('warning', 'Link anda tidak valid!');
    }elseif($user->verifiedaccount->token != $token){
        return redirect()->route('auth.signin')
          ->with('warning', 'Link anda tidak valid!');
    }elseif($user->verifiedaccount->isChanged) {
        return redirect()->route('auth.signin')
          ->with('warning', 'Link anda telah kadaluarsa! Coba reset kembali');
    }
    return null;
  }

  public static function checkValidationVerificationEmailRoutes(?User $user, string $token): ?RedirectResponse 
  {
    if(!$user){
      return redirect()->route('auth.signin')
          ->with('warning', 'Link anda tidak valid! Email belum terdaftar');
    }elseif($user->verifiedaccount->token != $token){
        return redirect()->route('auth.signin')
            ->with('warning', 'Link anda tidak valid! Token berbeda');
    }elseif($user->verifiedaccount->isVerified) {
        return redirect()->route('auth.signin')
            ->with('warning', 'Link anda tidak valid! Anda sudah diverifikasi');
    }
    return null;
  }
}