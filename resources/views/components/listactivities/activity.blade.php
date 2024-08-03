<div class="rounded-3xl bg-no-repeat bg-cover @if(Request::routeIs('main.index')) w-[24rem] h-[24rem] @elseif(Request::routeIs('main.activity')) w-[20rem] h-[20rem] @endif flex-shrink-0" style="background-image: url('{{ $activity['img'] }}')">
    <div class="bg-black w-full h-full bg-opacity-70 rounded-3xl text-white p-5 grid grid-cols-3 grid-rows-3">
        <div class="justify-self-end col-start-3 col-end-4 row-start-1 row-end-2 rounded-full w-[50px] h-[50px] bg-transparent border-4 border-dark-grey flex items-center justify-center">
            <x-svg.forward />
        </div>
        <x-listactivities.description :$activity />
        <a class="self-end justify-self-end col-start-3 col-end-4 row-start-3 row-end-4 rounded-full bg-white w-7 h-7 flex items-center justify-center">
            <x-svg.arrow-bottom :color="'black'"/>
        </a>
    </div>
</div>