<x-layouts.app :title="$title">
  @if(session('success') || session('warning'))
    <div class="text-center @if(session('success')) text-green-700 p-5 bg-green-200 @elseif(session('warning')) text-yellow-700 p-5 bg-yellow-200 @endif w-[50vw] text-sm mx-auto rounded-xl">
      <p>@if(session('success')) {{ session('success') }} @elseif(session('warning')) {{ session('warning') }} @endif </p>
    </div>
  @endif
  <x-auth.index :$title :$question :$action :$url :$post>
    <div class="flex flex-col items-center justify-center gap-3">
      <div class="flex flex-col gap-2">
        <input type="email" name="email" id="email" class="rounded-xl max-w-[20rem] min-w-[15rem] sm:min-w-[30rem] h-[3rem] p-5 text-black placeholder:text-black focus:outline-none" placeholder="Email" value="{{ old('email') }}">
        @error('email')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
      </div>
      <div class="flex flex-col gap-2">
        <input type="password" name="password" id="password" class="rounded-xl max-w-[20rem] min-w-[15rem] sm:min-w-[30rem] h-[3rem] p-5 text-black placeholder:text-black focus:outline-none" placeholder="Password" value="{{ old('password') }}">
        @error('password')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
      </div>
      <a href="" class="underline underline-offset-2 text-end self-end">Forget Password</a>
    </div>
  </x-auth.index>
</x-layouts.app>