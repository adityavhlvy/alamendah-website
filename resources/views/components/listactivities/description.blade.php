<div id="Content" class="self-end col-start-1 col-end-3 row-start-3 row-end-4 w-full">
    <h1 class="font-bold text-3xl translate">{{ $activity['name'] }}</h1>
    <h1 class="@isset($activity['paketoptions']) text-xl @else text-base text-justify mt-3 break-words @endif translate">@isset($activity['paketoptions']) Price: {{ $activity['paketoptions'][0]['price'] }} IDR @else {{ $activity['description'] }} @endif</h1>
    @isset($activity['paketoptions'])
        <p class="text-xs border-t-2 mt-4 hidden text-justify break-words translate">{{ $activity['description'] }}</p>
    @endif
</div>