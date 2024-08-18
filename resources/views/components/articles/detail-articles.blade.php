<div class="grid grid-cols-1 md:grid-cols-3  gap-7">
    <div class="col-start-1 col-end-1 md:col-end-3 flex flex-col gap-14">
        <x-articles.detail.header :$article />
        @foreach($article['subarticles'] as $subarticle)
            <x-articles.detail.content :$subarticle />
        @endforeach
    </div>
    <div class="col-start-1 col-end-1 md:col-start-3 md:col-end-4 flex flex-col gap-5">
        <div class="bg-black rounded-3xl text-white p-8 overflow-y-scroll hidden-scrollbar">
            <x-articles.another-articles-list :articles="$recents" :componentTitle="'Recent Articles'" />
            <div class="my-5"></div>
            <x-articles.another-articles-list :articles="$populars" :componentTitle="'Popular Articles'" />
        </div>
        @auth
            <x-articles.detail.rate :articleid="$article['id']" />
        @endauth
    </div>
</div>