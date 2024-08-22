<div class="w-full px-3 lg:px-40 py-20">
    <div class="flex md:rounded-3xl @if(!$popular && !$recents) items-center justify-center p-10 w-full bg-black @else flex-col md:flex-row min-h-[90vh] md:bg-black @endif">
        @if($popular && $recents)
            <x-articles.main-articles :articles="array_slice($popular, 0, 4)"/>
            <x-articles.another-articles :populars="array_slice($popular, 4, 3)" :$recents />
        @else 
            <h1 class="text-white font-bold text-3xl text-center w-full">Belum ada artikel yang dibuat, Harap dinantikan!</h1>
        @endif
    </div>
</div>