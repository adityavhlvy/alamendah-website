<div class="w-full flex flex-col items-center justify-center gap-32 ">
    @if(Request::routeIs(['main.index', 'main.activity', 'main.article' ,'main.activity.show', 'main.article.show']))
        <livewire:faq />
    @endif
    <div class="w-full bg-green-leaves lg:h-72 flex flex-col lg:flex-row items-center justify-between lg:ps-[113px] lg:pe-[46px] py-10 gap-10  text-white">
        <x-footer.description />
        <div class="flex flex-col  items-center sm:items-start sm:flex-row gap-10">
            <div class="flex flex-col items-center sm:items-start gap-6 lg:gap-1.5">
                <p class="text-4xl font-semibold translate">Find Us On</p>
                <x-nav2.socialmedia />
            </div>
            <x-footer.contact />
        </div>
    </div>
</div>
