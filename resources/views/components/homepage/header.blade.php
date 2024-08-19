<div class="bg-homepage-background bg-no-repeat bg-cover w-full min-h-[40rem]">
    <div class="bg-black w-full min-h-[40rem] bg-opacity-50 px-[10rem] py-[6rem] flex flex-col gap-10 sm:gap-5 items-center md:items-start">
      <a href="@auth  @else {{ route('auth.signin') }}  @endif" class="rounded-3xl w-60 h-16 sm:w-80 sm:h-20 bg-transparent border-dark-grey border-4 flex items-center justify-center text-center text-white font-semibold text-md sm:text-3xl" />Feel the Experience</a>
      <h1 class="font-extrabold text-4xl sm:text-7xl text-white sm:leading-[6rem] translate">Explore the Wonders of Alamendah:</h1>
      <a href="@auth {{ route('main.booking') }}  @else {{ route('auth.signin') }}  @endif" class="rounded-xl w-32 h-10 sm:w-48 sm:h-14 bg-white border-white border-4 flex items-center justify-center text-center text-black font-semibold text-md sm:text-xl" />Book Now -> </a>
      <h1 class="font-bold text-2xl sm:text-4xl text-white mt-14 text-center md:text-start translate">Mesmerising Nature Excursions Await You</h1>
    </div>
</div>