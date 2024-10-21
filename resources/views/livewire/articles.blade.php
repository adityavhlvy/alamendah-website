<div class="w-full px-3 lg:px-40 py-20">
    <div class="flex md:rounded-3xl @if(!$articles) items-center justify-center p-10 w-full bg-black @else @if(count($articles) > 4) flex-col md:flex-row min-h-[90vh] md:bg-black @else items-center justify-center justify- @endif @endif">
        @if($articles)
            <x-articles.main-articles :articles="array_slice($articles, 0, 4)"/>
            @if(count($articles) > 4)
                <x-articles.another-articles :articles="array_slice($articles, 4, 7)" />
            @endif
        @else
            <h1 class="text-white font-bold text-3xl text-center w-full">Belum ada artikel yang dibuat, Harap dinantikan!</h1>
        @endif
    </div>
</div>
