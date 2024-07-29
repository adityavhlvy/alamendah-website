@props(['name', 'telpNumber'])
<li class="flex flex-row items-center gap-3">
    {{ $slot }}
    <p>{{ $name }} {{ $telpNumber }}</p>
</li>