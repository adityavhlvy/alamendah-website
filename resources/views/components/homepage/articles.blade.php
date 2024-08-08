<div class="w-full px-3 lg:px-40 py-20">
    <div class="flex flex-col md:flex-row min-h-[90vh] md:bg-black md:rounded-3xl">
        <x-articles.main-articles :articles="array_slice($articles, 0, 4)"/>
        <x-articles.another-articles :articles="array_slice($articles, 4, 3)" />
    </div>
</div>