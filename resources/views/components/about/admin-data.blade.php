<div class="bg-bright-grey p-5 flex flex-col gap-2">
    <h1 class="font-bold text-2xl">{{ $admin['user']['name'] }}</h1>
    <h2 class="font-bold text-base">{{ $admin['position'] }}</h2>
    <p class="italic text-sm"> @foreach($admin['achievements'] as $achievement) {{ $achievement['name'] }}@if(!$loop->last), @endif @endforeach </p>
</div>