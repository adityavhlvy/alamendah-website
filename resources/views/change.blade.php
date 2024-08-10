<x-layouts.app :title="$title">
  <x-auth.index :$title :$question :$action :$url :$post>
    <div class="flex flex-col items-center justify-center gap-3">
      <div class="flex flex-col gap-2">
        <input type="password" name="password" id="password" class="rounded-xl max-w-[20rem] min-w-[15rem] sm:min-w-[30rem] h-[3rem] p-5 text-black placeholder:text-black focus:outline-none" placeholder="Password" value="{{ old('password') }}">
        @error('password')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
      </div>
      <div class="flex flex-col gap-2">
        <input type="password" name="confirmpassword" id="confirmpassword" class="rounded-xl max-w-[20rem] min-w-[15rem] sm:min-w-[30rem] h-[3rem] p-5 text-black placeholder:text-black focus:outline-none" placeholder="Confirm Password" value="{{ old('confirmpassword') }}">
        @error('confirmpassword')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
      </div>
    </div>
  </x-auth.index>
</x-layouts.app>