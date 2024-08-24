<div id="List" class="absolute bg-white top-24 right-5 p-5 flex items-center justify-center h-14 gap-3 rounded-xl opacity-0 duration-300">
    <div id="Whatsapp" data-link="{{ route('main.activity.show', ['id' => $id]) }}">
        <x-svg.whatsapp-colorful />
    </div>
    <div id="Link" data-link="{{ route('main.activity.show', ['id' => $id]) }}">
        <x-svg.link />
    </div>
</div>