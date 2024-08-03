<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 justify-items-center gap-7 mb-24">
    @foreach(array_slice($listactivities, 3) as $activity)
        <x-listactivities.activity :$activity />
    @endforeach
</div>