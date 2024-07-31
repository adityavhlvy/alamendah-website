<div class="col-start-1 col-end-2 rounded-l-3xl md:rounded-l-none md:col-start-2 md:col-end-5 bg-blue-sky rounded-r-3xl grid grid-cols-3 grid-rows-3 items-center justify-items-center min-h-52 md:min-h-full">
    <div class="col-start-3 col-end-4 row-start-1 row-end-2 justify-self-end me-5">
        <x-svg.clock :width="50" :height="50" />
    </div>
    <x-activities.time.format />
</div>