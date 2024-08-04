<div class="self-end col-start-1 col-end-3 row-start-3 row-end-4">
    <h1 class="font-bold text-3xl">{{ $activity['name'] }}</h1>
    <h1 class="@isset($activity['price']) text-xl @else text-base text-justify mt-3 @endif">@isset($activity['price']) Price: {{ $activity['price'] }} IDR @else {{ $activity['description'] }} @endif</h1>
</div>