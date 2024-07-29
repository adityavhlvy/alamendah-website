<div class="border-solid border-2 border-dark-grey flex flex-row items-center px-10 rounded-3xl h-14">
    <form action="" method="post" class="flex flex-row items-center justify-center">
        @csrf
        <input type="text" name="search" id="" placeholder="Search" class="font-semibold text-2xl w-32 focus:outline-none">
        <button type="submit"><x-svg.search /></button>
    </form>
</div>