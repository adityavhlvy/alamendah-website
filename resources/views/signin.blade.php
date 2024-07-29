<x-layouts.app :title="$title">
  <x-auth.index :$title :$question :$action :$url>
    <div class="flex flex-col items-center justify-center gap-3">
      <input type="email" name="email" id="email" class="rounded-xl max-w-[20rem] min-w-[15rem] h-[3rem] p-5 sm:min-w-[30rem] text-black placeholder:text-black focus:outline-none" placeholder="Email">
      <input type="password" name="password" id="password" class="rounded-xl max-w-[20rem] min-w-[15rem] h-[3rem] sm:min-w-[30rem] p-5 text-black placeholder:text-black focus:outline-none" placeholder="Password">
      <a href="" class="underline underline-offset-2 text-end self-end">Forget Password</a>
    </div>
  </x-auth.index>
</x-layouts.app>