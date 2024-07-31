<div class="col-start-1 col-end-4 row-start-3 row-end-6 sm:row-end-4 flex flex-col sm:flex-row gap-5">
    @foreach($articles as $article)
        <x-articles.main-articles.article :$article />
    @endforeach 
</div>