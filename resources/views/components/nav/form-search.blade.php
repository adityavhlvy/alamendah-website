<div class="border-solid border-2 border-dark-grey flex flex-row items-center px-5 xl:px-10 rounded-3xl h-14">
    <form action="{{ route('main.search') }}" method="post" class="flex flex-row items-center justify-center">
        @csrf
        <input type="text" name="search" id="" placeholder="Search" class="font-semibold text-md md:text-xl xl:text-2xl w-16 md:w-24 xl:w-32 focus:outline-none">
        <button type="submit"><x-svg.search /></button>
    </form>
</div>