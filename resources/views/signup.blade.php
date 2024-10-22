<x-layouts.app :title="$title">
  <x-auth.index :$title :$question :$action :$url :$post>
    <div class="flex flex-col items-center justify-center gap-3">
      <div class="flex flex-col gap-2">
        <input type="text" name="name" id="name" class="rounded-xl max-w-[20rem] min-w-[15rem] sm:min-w-[30rem] h-[3rem] p-5 text-black placeholder:text-black focus:outline-none" placeholder="Name" value="{{ old('name') }}">
        @error('name')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
      </div>
      <div class="flex flex-col gap-2">
        <input type="email" name="email" id="email" class="rounded-xl max-w-[20rem] min-w-[15rem] sm:min-w-[30rem] h-[3rem] p-5 text-black placeholder:text-black focus:outline-none" placeholder="Email" value="{{ old('email') }}">
        @error('email')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
      </div>
      <div class="flex flex-col gap-2">
        <input type="telp" name="telephone" id="phone_number" class="rounded-xl max-w-[20rem] min-w-[15rem] sm:min-w-[30rem] h-[3rem] p-5 text-black placeholder:text-black focus:outline-none" placeholder="Phone Number" value="{{ old('telephone') }}">
        @error('telephone')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
      </div>
      <div class="flex flex-col gap-2">
        <input type="address" name="address" id="address" class="rounded-xl max-w-[20rem] min-w-[15rem] sm:min-w-[30rem] h-[3rem] p-5 text-black placeholder:text-black focus:outline-none" placeholder="Address" value="{{ old('address') }}">
        @error('address')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
      </div>
      <div class="flex flex-col gap-2">
        <input type="password" name="password" id="password" class="rounded-xl max-w-[20rem] min-w-[15rem] sm:min-w-[30rem] h-[3rem] p-5 text-black placeholder:text-black focus:outline-none" placeholder="Password" value="{{ old('password') }}">
        @error('password')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
      </div>
    </div>
  </x-auth.index>
</x-layouts.app>
