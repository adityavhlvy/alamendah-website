<div class="p-16 w-screen flex items-center justify-center">
  <form action="" method="POST" class="flex flex-col items-start gap-7">
    @csrf
    <x-booking.form />
    <button type="submit" class="bg-blue-sea text-white text-base sm:text-2xl py-1 sm:py-2 px-3 sm:px-5 rounded-lg sm:rounded-xl font-bold min-w-full sm:min-w-[10rem]">Submit</button>
  </form>
</div>