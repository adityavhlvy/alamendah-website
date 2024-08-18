<div class="bg-black rounded-3xl text-white p-8 flex flex-col items-center justify-center gap-7">
    <h1 class="font-bold text-3xl text-center">What are your thoughts?</h1>
    <div class="flex flex-row gap-4">
        <x-articles.detail.rate-button id="Dislike" :img="'img/Dislike-Hand.png'" />
        <x-articles.detail.rate-button id="Like" :img="'img/Like-Hand.png'" />
    </div>
    <script>
        const userid = "{{ Auth::user()->id }}"
        const articleid = "{{ $articleid }}"
    </script>
</div>