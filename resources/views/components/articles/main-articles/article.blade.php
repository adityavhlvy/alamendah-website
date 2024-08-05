<a href="{{ route('main.article.show', ['id' => $article['id']]) }}" class="flex flex-col w-full sm:w-[9.9rem] gap-2">
    <img src="{{ asset('storage/articles/'.$article['img']) }}" alt="" class="rounded-xl w-full h-32 sm:h-24">
    <h1 class="font-bold text-sm [text-shadow:0px_4px_4px_rgba(0,0,0,0.35)]">{{ $article['title'] }}</h1>
</a>