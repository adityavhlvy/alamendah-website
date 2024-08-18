<div class="flex flex-col gap-2">
    @if($label != '')
        <label for="{{ $id }}" class="text-sm sm:text-xl">{{ $label }}</label>
    @endif
    {{ $slot }}
</div>