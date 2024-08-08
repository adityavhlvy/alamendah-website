<div class="w-full flex flex-col items-center justify-center gap-32 ">
    @if(Request::routeIs(['main.index', 'main.activity', 'main.article' ,'main.activity.show', 'main.article.show']))
        <x-footer.faq />
    @endif
    <div class="w-full bg-green-leaves lg:h-72 flex flex-col lg:flex-row items-center justify-between lg:ps-[113px] lg:pe-[46px] py-10 gap-10  text-white">
        <x-footer.description />
        <x-footer.contact />
    </div>
</div>