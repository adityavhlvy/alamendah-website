<div class="flex py-10 px-5 md:px-24 items-center justify-center w-[calc(100vw-2.5rem)]">
    <form action="{{ $routes }}" class="p-0 md:p-10 flex flex-col w-full md:w-[calc(100%-5rem)] gap-6" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="bg-bright-grey flex flex-col p-5 md:p-10 w-full gap-6 rounded-3xl">
        {{ $slot }}
      </div>
      <button type="submit" class="bg-blue-sea p-3 rounded-xl text-white font-bold text-lg w-52">Submit</button>
    </form>
</div>
