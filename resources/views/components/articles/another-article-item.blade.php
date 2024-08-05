<a href="{{ route('main.article.show', ['id' => $article['id']]) }}" class="flex flex-row items-center gap-3">
    <img src="{{ asset('storage/articles/'.$article['img']) }}" alt="" class="rounded-xl max-w-[100px] max-h-[100px]">
    <h1 class="[text-shadow:0px_4px_4px_rgba(0,0,0,0.25)] text-sm font-semibold">{{ $article['title'] }}</h1>
</a>