<div class="flex flex-col px-3 xl:px-32 py-16 gap-20">
    <div class="flex flex-row overflow-hidden w-full relative rounded-xl" id="carousel">
        @foreach($article['galleries'] as $gallery)
            <a class="object-fill min-w-full min-h-full -translate-0x">
                <x-articles.article-image :img="$gallery['img']" />
            </a>
        @endforeach
        <div class="absolute right-0 bottom-5 md:bottom-9 bg-white rounded-l-lg lg:rounded-l-2xl w-20 h-7 lg:w-28 lg:h-14 flex flex-row items-center justify-center gap-3">
            <div id="left" class="rotate-90">
                <x-svg.arrow-bottom :color="'black'"/>
            </div>
            <div id="right" class="-rotate-90">
                <x-svg.arrow-bottom :color="'black'"/>
            </div>
        </div>
    </div>
    <x-articles.detail-articles :$article :$articles />
    <script>const max = {{ count($article['galleries']) }}</script>
</div>