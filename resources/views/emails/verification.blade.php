<x-mail::message>
  <h1>Verifikasi Email Anda</h1>
  <p>Anda telah melakukan registrasi pada halaman website Desa Alamendah.</p>
  <p>Langkah selanjutnya yang perlu anda lakukan sebelum melanjutkan perjalanan anda, silahkan lakukan verifikasi email anda dengan mengakses link yang telah terlampir dibawah ini</p>
  <x-mail::button :url="route('auth.account-verification', ['email' => $email, 'token' => $token])" color="success">
    Verifikasi Email Anda
  </x-mail::button>

  <x-mail::panel>
    Pastikan link yang diberikan dilakukan oleh email kami, yaitu Desa Alamendah. Waspada terhadap penipuan yang dapat membahayakan anda.
  </x-mail::panel>
  Thanks,<br>
  {{ config('app.name') }}
</x-mail::message>