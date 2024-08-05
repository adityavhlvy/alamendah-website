<div class="flex flex-row overflow-hidden w-full relative rounded-xl" id="carousel">
    @foreach($listactivities as $activity)
    <a href="{{ route('main.activity.show', ['id'=> $activity['id']]) }}" class="object-fill min-w-full min-h-full -translate-0x">
        <img src="{{ $activity['img'] }}" alt="" class="min-w-full min-h-full">
    </a>
    @endforeach
    <x-listactivities.button-header-all-activities />
</div>