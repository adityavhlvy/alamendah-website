<div {{ $attributes->merge(['class' => "h-10 md:h-16 w-20 sm:w-40 lg:w-80 border-4 rounded-3xl border-dark-grey border-solid flex items-center justify-end px-3 relative"]) }}>
    <x-nav2.select-element />
    <x-svg.arrow-bottom id="arrow" class="transition-transform duration-300 hidden lg:block" :color="'black'" />
</div>
