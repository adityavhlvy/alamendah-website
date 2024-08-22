<div class="col-start-1 col-end-2 flex flex-col">
    <div class="text-base sm:text-2xl flex flex-row justify-start gap-1">
        <div class="font-bold">Start</div> 
        <div>at Rp.</div>
        <div class="font-bold flex flex-row gap-2">
            @if(count($activity['paketoptions']) == 1)
                <div>
                    {{ number_format($activity['paketoptions'][0]['price'], 0, ',', '.') }}
                </div>
            @else
                <div id="Price">XXX.000</div>
                <div id="button" class="relative flex h-7 items-center bg-white rounded-md text-black cursor-pointer">
                    <x-svg.arrow-bottom :color="'black'" />
                    <div class="absolute hidden max-sm:-bottom-20 -right-20 sm:-right-36 w-32 bg-black bg-opacity-50 rounded-md text-white border-2 border-dark-grey text-base font-normal" id="dropdown">
                        @foreach($activity['paketoptions'] as $key => $paketoption)
                            <div class="w-full p-2 hover:bg-dark-grey border-dark-grey @if(!$loop->first) border-t-2 @endif" data-price="{{ $paketoption['price'] }}" data-minimum-person="{{ $paketoption['minimum_person'] }}">Paket {{ $key+1 }}</div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
        <div class="text-sm translate">/person</div>
    </div>
    <p class="text-xl">
        Minimum of <span class="font-bold">
            @if(count($activity['paketoptions']) == 1)
                {{ $activity['paketoptions'][0]['minimum_person'] }}
            @else
                <span id="MinimumPerson">
                    __
                </span>
            @endif
        </span> people
    </p>
    <p class="text-base text-justify my-3 translate break-words">{{ $activity['description'] }}</p>
    <a href="" class="bg-white text-black rounded-xl text-center p-3 max-w-44 font-bold">Book Now</a>
</div>