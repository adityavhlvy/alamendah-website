<div class="w-full p-7 flex items-center justify-center">
    <div class="bg-green-leaves w-[35rem] min-h-[10rem] rounded-3xl text-white grid grid-cols-1 items-center justify-center p-16 gap-10">
      <h1 class="font-extrabold text-3xl sm:text-5xl tracking-wider text-center">{{ $title }}</h1>
      <form action="{{ $post }}" method='post' class="flex flex-col items-center justify-center gap-16">
        @csrf
        {{ $slot }}
        <button type="submit" class="bg-white text-black flex items-center justify-center max-w-[20rem] min-w-[15rem] sm:min-w-[30rem] h-[3rem] rounded-xl">{{ $title }}</button>
      </form>
      <p class="text-center flex flex-col items-center justify-center gap-2 sm:flex-row translate">{{ $question }} <a href="{{ $url }}" class="underline underline-offset-2 text-blue-sky translate">{{ $action }}</a></p>
    </div>
  </div>