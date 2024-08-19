<div class="w-full flex flex-col px-3 xl:px-32 pt-20 gap-7 mb-24">
    <div class="overflow-hidden min-w-full rounded-xl bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset($activity['img']) }}')">
        <div class="grid grid-cols-1 lg:grid-cols-3 bg-black min-w-full min-h-full bg-opacity-70 p-12 gap-10 sm:gap-10 items-center md:items-start text-white">
            <h1 class="col-start-1 col-end-2 lg:col-end-4 font-bold text-8xl">{{ $activity['name'] }}</h1>
            <p class="col-start-1 col-end-2 lg:col-end-4 text-3xl translate">{{ $activity['slogan'] }}</p>
            <x-listactivities.detail-description :$activity />
            <x-listactivities.list-type-detail :$activity />
        </div>
    </div>
</div>
