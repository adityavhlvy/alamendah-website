<div class="bg-dark-grey sm:rounded-r-3xl sm:rounded-l-3xl md:rounded-l-none w-full md:w-[50vw] h-full text-white p-12">
    <div class="flex flex-col gap-10">
        @auth 
            @if($recents) 
                <x-articles.another-articles-list :articles="$recents" :componentTitle="'Recent Articles'" /> 
            @else 
                <h1 class="[text-shadow:0px_4px_4px_rgba(0,0,0,0.25)] font-semibold text-2xl">Recent Articles</h1> 
                <h1 class="[text-shadow:0px_4px_4px_rgba(0,0,0,0.25)] font-semibold text-lg text-center">Anda belum membaca berita apapun</h1> 
            @endif 
        @endauth
        @if($articles) 
            <x-articles.another-articles-list :$articles :componentTitle="'Popular Articles'" />
        @else
            <h1 class="[text-shadow:0px_4px_4px_rgba(0,0,0,0.25)] font-semibold text-2xl">Popular Articles</h1> 
            <h1 class="[text-shadow:0px_4px_4px_rgba(0,0,0,0.25)] font-semibold text-lg text-center">Belum ada berita yang dibuat</h1>
        @endif
    </div>
</div>