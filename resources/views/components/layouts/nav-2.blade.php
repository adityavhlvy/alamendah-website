<nav class="w-full p-3 flex flex-row justify-end bg-bright-grey gap-4">
    <x-nav2.select-language></x-nav2.select-language>
    <a @auth href="{{ route('auth.logout') }}" @else href="{{ route('auth.signin') }}" @endauth class="font-semibold text-md md:text-3xl max-w-24 md:max-w-44 h-10 md:h-16 bg-inherit border-4 rounded-3xl border-dark-grey border-solid flex items-center justify-center p-4">@auth Logout @else Login @endauth</a>
</nav>
