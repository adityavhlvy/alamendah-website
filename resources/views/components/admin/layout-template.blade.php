<div class="flex items-center justify-center w-screen mb-12">
    <div class="md:w-auto w-full p-4">
      <div class="bg-bright-grey flex flex-col p-5 md:p-8 w-full md:w-[70vw] lg:w-[90vw] gap-6 rounded-3xl">
        <div class="bg-dark-grey flex flex-row p-4 sm:p-8 w-full rounded-xl">
          <div id="Data" class="bg-dark-grey flex flex-row w-full rounded-xl">
            <div class="bg-blue-sea text-white font-bold text-[0.6rem] sm:text-2xl lg:text-4xl flex items-center justify-center w-1/2 py-5 rounded-xl">Artikel</div>
            <div class="bg-dark-grey text-black text-[0.6rem] sm:text-2xl lg:text-4xl flex items-center justify-center w-1/2 py-5 rounded-xl font-bold">Paket</div>
          </div>
        </div>
        {{ $slot }}
      </div>
    </div>
  </div>