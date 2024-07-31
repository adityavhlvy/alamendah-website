<div class="bg-bright-grey sm:rounded-3xl p-3 sm:p-12 w-full md:w-[50vw] min-h-full flex flex-col gap-8">
    <div class="grid grid-cols-3 grid-rows-5 sm:grid-rows-3 text-white gap-6">
        <x-articles.main-articles.heading :article="$articles[0]"/>
        <x-articles.main-articles.body :articles="array_slice($articles, 1, 4)" />
    </div>
    <x-articles.main-articles.footer />
</div>