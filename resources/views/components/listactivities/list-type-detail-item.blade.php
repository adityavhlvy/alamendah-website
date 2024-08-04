<div class="rounded-3xl bg-no-repeat bg-cover w-[22rem] h-[22rem] flex-shrink-0" style="background-image: url('{{ asset($list['activity']['img']) }}')">
    <div class="bg-black w-full h-full bg-opacity-30 rounded-3xl text-white p-5 flex flex-col items-end justify-end">
        {{ $slot }}
    </div>
</div>