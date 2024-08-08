<div class="w-full sm:w-[80vw] bg-bright-grey grid grid-cols-1 lg:grid-cols-2 lg:grid-row-2 items-center sm:p-10 p-5 sm:rounded-2xl">
    <h1 class="col-start-1 col-end-2 row-start-1 row-end-2 font-extrabold text-center lg:text-start text-4xl sm:text-5xl p-7 sm:p-10">Any questions? <br> We got you</h1>
    <x-footer.faq.team-description />
    <div id="QNA" class="w-full col-start-1 col-end-2 lg:col-start-2 lg:col-end-3 lg:row-start-1 lg:row-end-3 font-bold text-xl self-start flex flex-col gap-4">
        @foreach($qnas as $qna)
            <x-footer.faq.question :$qna />
        @endforeach
    </div>
</div>