<x-layouts.app :title="$title">
  <x-auth.index :$title :$question :$action :$url>
    <div class="flex flex-col items-center justify-center gap-3">
      <input type="text" name="name" id="name" class="rounded-xl w-[30rem] h-[3rem] p-5 text-black placeholder:text-black focus:outline-none" placeholder="Name">
      <input type="email" name="email" id="email" class="rounded-xl w-[30rem] h-[3rem] p-5 text-black placeholder:text-black focus:outline-none" placeholder="Email">
      <input type="telp" name="phone_number" id="phone_number" class="rounded-xl w-[30rem] h-[3rem] p-5 text-black placeholder:text-black focus:outline-none" placeholder="Phone Number">
      <input type="password" name="password" id="password" class="rounded-xl w-[30rem] h-[3rem] p-5 text-black placeholder:text-black focus:outline-none" placeholder="Password">
    </div>
  </x-auth.index>
</x-layouts.app>