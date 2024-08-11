<?php

use App\Models\User;
use Illuminate\Http\RedirectResponse;

  function verified($email): ?RedirectResponse {
    $user = User::where('email', $email)->first();
      if(!$user->verifiedaccount->isVerified) {
          return redirect()->route('auth.signin')
            ->with('warning', 'Email anda belum diverifikasi. Lakukan verifikasi terlebih dahulu!')
            ->withInput();
      }
      return null;
  }