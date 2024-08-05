<div class="grid grid-cols-1 md:grid-cols-3 px-3 xl:px-32 py-16 gap-7">
    <div class="col-start-1 col-end-1 md:col-end-3 flex flex-col gap-14">
        <x-articles.detail.header :$article />
        @foreach($article['subarticles'] as $subarticle)
            <x-articles.detail.content :$subarticle />
        @endforeach
    </div>
    <div class="col-start-1 col-end-1 md:col-start-3 md:col-end-4 flex flex-col gap-5">
        <div class="bg-dark-grey rounded-3xl text-white p-8 overflow-y-scroll hidden-scrollbar">
            <x-articles.another-articles-list :articles="$allArticle" :componentTitle="'All Articles'" />
        </div>
        <x-articles.detail.rate />
    </div>
</div>