<x-listactivities.activities-template>
    @foreach(array_slice($listactivities, 3, 9) as $activity)
        <x-listactivities.activity :$activity />
    @endforeach
</x-listactivities.activities-template>