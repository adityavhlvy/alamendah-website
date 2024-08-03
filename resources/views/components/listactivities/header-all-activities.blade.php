<div class="flex flex-row overflow-hidden w-full relative rounded-xl" id="carousel">
    @foreach($listactivities as $activity)
        <img src="{{ $activity['img'] }}" alt="" class="object-fill min-w-full -translate-0x">
    @endforeach
    <x-listactivities.button-header-all-activities />
</div>