<div class="w-full flex flex-col px-3 sm:px-40 pt-20 gap-7">
    @if(Request::routeIs('main.index'))
        <div class="flex flex-row justify-between items-end">
            <h1 class="text-dark-green text-center sm:text-left text-3xl font-bold">Activities</h1>
            <a href="{{ route('main.activity') }}" class="text-blue-sea underline underline-offset-2 text-sm">See more</a>
        </div>
        <x-listactivities.activities :$listactivities />
    @elseif(Request::routeIs('main.activity'))
        <div class="flex flex-row overflow-hidden w-full rounded-3xl">
            @foreach(array_slice($listactivities, 0, 3) as $activity)
                <img src="{{ $activity['img'] }}" alt="">
            @endforeach
        </div>
        <x-listactivities.allactivities :$listactivities />
    @endif
    </div>
