@props(['bgColor'])
<div class="flex items-center justify-center border-4 border-dark-grey lg:w-16 lg:h-16 w-10 h-10 rounded-full @isset($bgColor) {{ $bgColor }} @else bg-bright-grey @endif">
    {{ $slot }}
</div>