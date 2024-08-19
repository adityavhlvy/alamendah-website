<div class="flex flex-col gap-3 h-full">
    <img src="{{ asset('storage/articles/'.$article['img']) }}" alt="" class="w-full h-full rounded-3xl">
    <h1 class="font-bold text-xl translate">{{ $article['title'] }}</h1>
    <p class="translate">{{ substr($article['subarticles'][0]['description'], 0, 350) }}</p>
    <x-articles.all-articles.footer :$article />
</div>