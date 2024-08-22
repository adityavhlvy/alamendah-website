<x-dashboardform.template :routes="route('dashboard.add-package')">
  <div class="w-64 sm:w-96 md:w-64 lg:w-96">
    <input type="text" placeholder="Package Name" name="package_name" class="text-black placeholder:text-black rounded-xl border-none outline-none p-2 w-full">
    @error('package_name')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
  </div>
  <div class="w-64 sm:w-96 md:w-64 lg:w-96">
    <input type="text" placeholder="Slogan" name="package_slogan" class="text-black placeholder:text-black rounded-xl border-none outline-none p-2 ">
    @error('package_slogan')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
  </div>
  <div class="flex items-start gap-3">
    <div class="options flex flex-col items-start lg:items-center gap-3">
      <div class="option flex flex-col lg:flex-row gap-3">
        <div class="flex flex-row items-center gap-3">
          <div class="w-40 sm:w-auto">
            <input type="number" placeholder="Price" name="package_price[]" class="placeholder:text-black rounded-xl border-none outline-none p-2 w-full">
            @error('package_price')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
          </div>
          <p>/ pax</p>
        </div>
        <div class="w-40 sm:w-auto">
          <input type="number" placeholder="Min.Person" name="minimum_person[]" class="placeholder:text-black rounded-xl border-none outline-none p-2 w-full">
          @error('minimum_person')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
        </div>
        <button id="Option-add" type="button" class="rounded-full bg-white border-dark-grey border-[1px] px-[0.8rem] py-1">+</button>
      </div>
    </div>  
  </div>
  <div class="">
    <input type="file" name="img_package" id="imageInput">
    @error('img_package')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
  </div>
  <div class="w-full">
    <textarea name="description_package" class="rounded-3xl p-4 placeholder:text-black focus:outline-none appearance-none w-full" id="" cols="25" rows="10" placeholder="Description"></textarea>
    @error('description_package')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
  </div>
  <div id="Activity" class="flex flex-col items-center justify-center w-full">
    <div class="activity flex items-start gap-6">
      <div class="flex flex-col justify-center gap-3 w-52 sm:w-96 md:w-64 lg:w-96">
        <div class="w-full">
          <input type="text" name="name_activity[]" placeholder="Name of Type of Activity" class="p-2 rounded-xl placeholder:text-black">
          @error('name_activity')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
        </div>
        <img src="#" class="preview" alt="">
        <div class="w-full">
          <input type="file" accept=".png, .jpg, .jpeg, .bmp" name="img_activity[]" class="imageInput">
          @error('img_activity')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
        </div>
        <div class="">
          <textarea name="description_activity[]" id="" cols="25" rows="5" placeholder="Short Description" class="p-4 rounded-xl placeholder:text-black"></textarea>
          @error('description_activity')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
        </div>
      </div>
      <button id="Activity-add" type="button" class="rounded-full bg-white border-dark-grey border-[1px] px-[0.6rem] py-1">+</button>
    </div>
  </div>
</x-dashboardform.template>
