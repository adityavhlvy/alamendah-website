<x-listactivities.activities-template>
    @foreach(array_slice($listactivities, 0, 6) as $activity)
        <x-listactivities.activity :$activity />
    @endforeach
</x-listactivities.activities-template>