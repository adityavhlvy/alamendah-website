<div class="grid grid-cols-[repeat(1,20rem)] lg:grid-cols-[repeat(2,20rem)] xl:grid-cols-[repeat(3,20rem)] auto-rows-[minmax(20rem,20rem)] justify-items-center gap-7 mb-24 duration-300">
    @foreach($listactivities as $activity)
        <x-listactivities.activity :$activity />
    @endforeach
</div>
