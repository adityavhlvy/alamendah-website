<div class="bg-bright-grey p-5 flex flex-col gap-2">
    <h1 class="font-bold text-2xl">{{ $admin['name'] }}</h1>
    <h2 class="font-bold text-base">{{ $admin['position'] }}</h2>
    <p class="italic text-sm"> @foreach($admin['achievement'] as $achievement) {{ $achievement }}@if(!$loop->last), @endif @endforeach </p>
</div>