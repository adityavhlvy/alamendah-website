<nav class="w-full p-3 grid grid-cols-5 md:grid-cols-3 bg-bright-grey justify-stretch items-center grid-flow-col auto-cols-fr">
    <x-nav2.select-language class="col-start-1 col-end-2"/>
    <x-nav2.socialmedia class="col-start-2 col-end-5 md:col-end-3" />
    <a href="{{ route('auth.signin') }}" class="font-semibold text-md md:text-3xl max-w-20 md:max-w-36 h-10 md:h-16 bg-inherit border-4 rounded-3xl border-dark-grey border-solid flex items-center justify-center md:col-start-3 col-start-5 md:col-end-4 col-end-6">Login</a>
</nav>