<div class="grid grid-cols-1 sm:grid-cols-2 justify-items-center items-stretch lg:px-40 px-3 pb-20 gap-5">
    @foreach($articles as $article)
        <x-articles.all-articles.article :$article />
    @endforeach
</div>
