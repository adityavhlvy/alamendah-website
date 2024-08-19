<div class="flex flex-row justify-between items-center">
    <div class="flex flex-row items-center justify-center gap-2 font-bold text-sm">
        <x-svg.calendar :width="15" :height="15" :color="'black'" />
        @php $date = new DateTime($article['created_at']); @endphp
        <p>{{ $date->format('H:i, d/m/Y') }}</p>
    </div>
    <a href="{{ route('main.article.show', ['id' => $article['id']]) }}" class="font-bold text-blue-sea underline underline-offset-4 translate">See more</a>
</div>