<p class="text-base xl:text-xl font-semibold">
    @foreach($authors as $author)
        {{ $author['user']['name'] }} @if(!$loop->last),@endif
    @endforeach
</p>