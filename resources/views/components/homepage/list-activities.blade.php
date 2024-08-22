<div class="w-full flex flex-col px-3 sm:px-40 pt-20 gap-7 @if(Request::routeIs('main.activity')) justify-center items-center @endif">
    @if(Request::routeIs('main.index'))
        <div class="flex flex-row justify-between items-end">
            <h1 class="text-dark-green text-center sm:text-left text-3xl font-bold translate">Activities</h1>
            <a href="{{ route('main.activity') }}" class="text-blue-sea underline underline-offset-2 text-sm translate">See more</a>
        </div>
        @if($listactivities)
            <x-listactivities.activities :$listactivities />
        @else 
            <h1 class="font-bold text-center text-2xl">Belum ada paket yang dibuat, Harap ditunggu</h1>
        @endif
    @elseif(Request::routeIs('main.activity'))
        @if($listactivities)
            <x-listactivities.header-all-activities :listactivities="array_slice($listactivities, 0, 3)"/>
            <x-listactivities.allactivities :$listactivities />
        @else
        <h1 class="font-bold text-center text-2xl mb-14">Belum ada paket yang dibuat, Harap ditunggu</h1>
        @endif
    @endif
</div>
