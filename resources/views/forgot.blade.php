<x-layouts.app :title="$title">
  <x-auth.index :$title :$question :$action :$url :$post>
    <div class="flex flex-col gap-2">
      <input type="email" name="email" id="email" class="rounded-xl max-w-[20rem] min-w-[15rem] sm:min-w-[30rem] h-[3rem] p-5 text-black placeholder:text-black focus:outline-none" placeholder="Email" value="{{ old('email') }}">
      @error('email')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
    </div>
  </x-auth.index>
</x-layouts.app>