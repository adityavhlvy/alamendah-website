<a href="{{ route('main.article.show', ['id' => $article['id']]) }}" class="flex flex-row items-center gap-3">
    <img src="{{ asset('storage/'.$article['galleries'][0]['img']) }}" alt="" class="rounded-xl w-[100px] h-[70px]">
    <h1 class="[text-shadow:0px_4px_4px_rgba(0,0,0,0.25)] text-sm font-semibold translate">{{ $article['title'] }}</h1>
</a>