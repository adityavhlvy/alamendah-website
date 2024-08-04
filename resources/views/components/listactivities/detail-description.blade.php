<div class="col-start-1 col-end-2 flex flex-col">
    <p class="text-2xl flex flex-row justify-start gap-1"><span class="font-bold">Start</span> at Rp.<span class="font-bold">{{ number_format($activity['price'], 0, ',', '.') }}</span><span class="text-sm">/person</span></p>
    <p class="text-xl">Minimum of <span class="font-bold">{{ $activity['minimum_person'] }}</span> people</p>
    <p class="text-base text-justify my-3">{{ $activity['description'] }}</p>
    <a href="" class="bg-white text-black rounded-xl text-center p-3 max-w-44 font-bold">Book Now</a>
</div>