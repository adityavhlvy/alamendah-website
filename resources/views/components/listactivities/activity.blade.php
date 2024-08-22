<a href="{{ route('main.activity.show', ['id' => $activity['id']]) }}" class="group relative activities rounded-3xl transition-[height] duration-300 overflow-hidden @if(Request::routeIs('main.index')) w-[24rem] h-[24rem] @elseif(Request::routeIs('main.activity')) w-[20rem] h-[20rem] @endif flex-shrink-0" >
    <img src="{{ asset('storage/'.$activity['img']) }}" alt="" class="absolute w-full h-full group-hover:scale-110 duration-200 -z-10">
    <div class="bg-black w-full h-full bg-opacity-70 rounded-3xl text-white p-5 grid grid-cols-3 grid-rows-3">
        <div class="justify-self-end col-start-3 col-end-4 row-start-1 row-end-2 rounded-full w-[50px] h-[50px] bg-transparent border-4 border-dark-grey flex items-center justify-center">
            <x-svg.forward />
        </div>
        <x-listactivities.description :$activity />
        <div id="Description" class="self-end justify-self-end col-start-3 col-end-4 row-start-3 row-end-4 rounded-full bg-white w-7 h-7 flex items-center justify-center">
            <x-svg.arrow-bottom :color="'black'"/>
        </div>
    </div>
</a>