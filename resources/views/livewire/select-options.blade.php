<div class="option flex flex-col lg:flex-row gap-3">
    <div class="flex flex-row items-center gap-3">
      <div class="w-40 sm:w-auto">
        <input type="number" placeholder="Price" name="package_price[]" class="placeholder:text-black rounded-xl border-none outline-none p-2 w-full" @isset($option) value="{{ $option['price'] }}" @endif>
        @error('package_price.*')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
      </div>
      <p>/ pax</p>
    </div>
    <div class="w-40 sm:w-auto">
      <input type="number" placeholder="Min.Person" name="minimum_person[]" class="placeholder:text-black rounded-xl border-none outline-none p-2 w-full" @isset($option) value="{{ $option['minimum_person'] }}" @endif>
      @error('minimum_person.*')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
    </div>
    <button id="{{ $buttonId }}" type="button" class="rounded-full bg-white border-dark-grey border-[1px] px-[0.8rem] py-1 {{ $rotate }}">+</button>
</div>
