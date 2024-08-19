<div id="Content" class="self-end col-start-1 col-end-3 row-start-3 row-end-4">
    <h1 class="font-bold text-3xl translate">{{ $activity['name'] }}</h1>
    <h1 class="@isset($activity['price']) text-xl @else text-base text-justify mt-3 @endif translate">@isset($activity['price']) Price: {{ $activity['price'] }} IDR @else {{ $activity['description'] }} @endif</h1>
    <p class="text-xs border-t-2 mt-4 hidden text-justify translate">{{ $activity['description'] }}</p>
</div>