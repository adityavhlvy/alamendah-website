<div {{ $attributes->merge(['class' => "h-16 w-60 border-4 rounded-3xl border-dark-grey border-solid flex items-center justify-end px-3 relative"]) }}>
    <x-nav2.select-element />
    <x-svg.arrow-bottom id="arrow" class="transition-transform duration-300"/>
    <script src="{{ asset('js/select-ops.js') }}"></script>
</div>