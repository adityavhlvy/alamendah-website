<nav class="w-full py-3 grid grid-cols-6 bg-bright-grey">
    <x-nav2.socialmedia class="col-start-3 col-end-5" />
    <x-nav2.select-language class="col-start-5 col-end-6"/>
    <a href="{{ route('auth.signin') }}" class="font-semibold text-3xl w-36 h-16 bg-inherit border-4 rounded-3xl border-dark-grey border-solid flex items-center justify-center col-start-6 col-end-7">Login</a>
</nav>