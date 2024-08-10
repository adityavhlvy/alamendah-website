<x-mail::message>
  <h1>Reset Password akun anda</h1>
  <p>Anda telah mendaftarkan email ini ke website Desa Alamendah</p>
  <p>Namun, seperti yang anda katakan sebelumnya, anda telah lupa password yang anda gunakan pada website Desa Alamendah</p>
  <p>Untuk itu, anda dapat melakukan reset password pada akun ini dengan melakukan klik pada tombol dibawah ini</p>
  <x-mail::button :url="route('auth.change', ['email' => $email,'token' => $token])">
    Reset Your Password
  </x-mail::button>

  <x-mail::panel>
    Pastikan link yang diberikan dilakukan oleh email kami, yaitu Desa Alamendah. Waspada terhadap penipuan yang dapat membahayakan anda.
  </x-mail::panel>

  Thanks,<br>
  {{ config('app.name') }}
</x-mail::message>
