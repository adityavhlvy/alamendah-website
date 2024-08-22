<div class="grid grid-cols-[repeat(1,20rem)] lg:grid-cols-[repeat(2,20rem)] xl:grid-cols-[repeat(3,20rem)] auto-rows-[minmax(20rem,20rem)] justify-items-center gap-7 mb-24 duration-300">
    @foreach(array_slice($listactivities, 3) as $activity)
        <x-listactivities.activity :$activity />
    @endforeach
    <script>const max = {{ $listactivities > 3 ? 3 : count($listactivities) }}</script>
</div>
