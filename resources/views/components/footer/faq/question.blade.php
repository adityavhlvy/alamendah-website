<div class="flex flex-col gap-2" id="Question">
    <div class="border-b-2 border-black flex flex-row w-full justify-between p-3 items-center gap-5">
        <p>Q:{{ $qna['question'] }}</p>
        <x-svg.plus />
    </div>
    <p class="text-sm font-light hidden" id="Answer">A: {{ $qna['answer'] }}</p>
</div>