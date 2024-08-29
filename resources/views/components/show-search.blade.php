@if(!empty($results))
<div class="flex flex-col gap-5">
    @foreach($results as $result)
        <a @if($request == 'Artikel') href="{{ route('main.article.show', ['id' => $result['id']]) }}" @elseif($request == 'Paket') href="{{ route('main.activity.show', ['id' => $result['id']]) }}" @endif class="flex flex-col border-2 border-black p-4 rounded-xl gap-2">
            <h3 class="font-semibold">{{ $request }}</h3>
            <h1 class="font-bold text-xl">@if($request == "Artikel") {{ $result['title'] }} @elseif($request == "Paket") {{ $result['name'] }} @endif</h1>
            @if($request == "Artikel")
                <div class="w-full flex flex-row gap-3">
                    @foreach($result['authors'] as $author)
                        <div class=" bg-green-400 text-green-700 border-green-500 p-2 min-w-16 w-auto max-w-96 rounded-lg flex items-center justify-center text-xs font-bold">
                            {{ $author['user']['name'] }}
                        </div>
                    @endforeach
                </div>
            @elseif($request == "Paket")
                <p class="text-xs font-semibold">{{ $result['slogan'] }}</p>
            @endif
        </a> 
    @endforeach
</div>
@endif