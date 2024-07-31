<div class="flex flex-nowrap overflow-x-scroll custom-scrollbar pb-10 gap-6 w-full">
    @foreach($listactivities as $activity)
        <x-listactivities.activity :$activity />
    @endforeach
</div>