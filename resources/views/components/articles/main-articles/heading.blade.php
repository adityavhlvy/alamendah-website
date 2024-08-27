<a href="{{ route('main.article.show', ['id' => $article['id']]) }}" class="w-full h-[22rem] bg-no-repeat bg-cover col-start-1 col-end-4 row-start-1 row-end-3 rounded-xl" style="background-image: url('storage/{{ $article['galleries'][0]['img'] }}')">
    <div class="bg-black bg-opacity-20 w-full h-full flex flex-row items-end justify-items-start p-4 rounded-xl">
        <div class="flex flex-row items-center gap-4">
            <div class="w-1 h-24 bg-white"></div>
            <h1 class="text-2xl font-semibold translate">{{ $article['title'] }}</h1>
        </div>
    </div>
</a>