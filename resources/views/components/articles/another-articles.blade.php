<div class="bg-black sm:rounded-r-3xl sm:rounded-l-3xl md:rounded-l-none w-full md:w-[50vw] h-full text-white p-12">
    <div class="flex flex-col gap-10">
        @if($articles) 
            <x-articles.another-articles-list :$articles :componentTitle="'Recent Articles'" /> 
        @else 
            <h1 class="[text-shadow:0px_4px_4px_rgba(0,0,0,0.25)] font-semibold text-2xl translate">Recent Articles</h1> 
            <h1 class="[text-shadow:0px_4px_4px_rgba(0,0,0,0.25)] font-semibold text-lg text-center translate">No news has been made yet</h1> 
        @endif
    </div>
</div>