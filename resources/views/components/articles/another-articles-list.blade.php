<div class="flex flex-col gap-5">
    <h1 class="[text-shadow:0px_4px_4px_rgba(0,0,0,0.25)] font-semibold text-2xl">{{ $componentTitle }}</h1>
    @foreach($articles as $article)
        <x-articles.another-article-item :$article />
    @endforeach
</div>