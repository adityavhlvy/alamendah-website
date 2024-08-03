<div class="bg-dark-grey sm:rounded-r-3xl sm:rounded-l-3xl md:rounded-l-none w-full md:w-[50vw] h-full text-white p-12">
    <div class="flex flex-col gap-10">
        @auth <x-articles.another-articles-list :articles="$recents" :componentTitle="'Recent Articles'" /> @endauth
        <x-articles.another-articles-list :$articles :componentTitle="'Popular Articles'" />
    </div>
</div>