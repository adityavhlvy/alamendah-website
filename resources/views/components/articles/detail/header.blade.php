<div class="grid grid-cols-3 gap-5 items-center">
    <h1 class="col-start-1 col-end-4 text-5xl font-bold text-center sm:text-start translate">{{ $article['title'] }}</h1>
    <div class="col-start-1 col-end-3 text-xl flex flex-col items-center sm:text-start text-center sm:flex-row gap-3">
        <x-articles.detail.author-logo :authors="$article['authors']" />
        <x-articles.detail.author :authors="$article['authors']" />
    </div>
    <p class="col-start-3 col-end-4 flex flex-col items-center sm:text-start text-center sm:flex-row font-extrabold gap-2 text-sm">
        <x-svg.calendar :width="30" :height="30" :color="'black'" /> 
        @php $date = new DateTime($article['created_at']); @endphp
        {{ $date->format('H:i, d/m/Y') }}
    </p>
</div>