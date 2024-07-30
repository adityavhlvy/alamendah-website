<div class="col-start-1 col-end-2 bg-green-leaves rounded-r-3xl md:rounded-r-none rounded-l-3xl grid grid-cols-3 grid-rows-3 items-center justify-items-center h-full w-full">
    <input type="date" name="" id="" class="hidden">
    <div class="col-start-2 col-end-3 xl:col-start-3 xl:col-end-4 row-start-1 row-end-2">
        <x-svg.calendar :width="50" :height="50" />
    </div>
    <x-activities.date.format />
    <x-activities.date.btn />
</div>