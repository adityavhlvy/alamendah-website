<div class="activity flex items-start gap-6">
    <div class="flex flex-col justify-center gap-3 w-52 sm:w-96 md:w-64 lg:w-96">
      <div class="w-full">
        <input type="text" name="name_activity[]" placeholder="Name of Type of Activity" class="p-2 rounded-xl placeholder:text-black" @isset($activity) value="{{ $activity['name'] }}" @endif>
        @error('name_activity.*')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
      </div>
      <img @isset($activity) src="{{ asset('storage/'.$activity['img']) }}" @else src="#" @endif  class="preview" alt="">
      <div class="w-full">
        @isset($activity)
          <input type="hidden" name="img_activity_old[]" value="{{ $activity['img'] }}">
        @endif
        <input type="file" accept=".png, .jpg, .jpeg, .bmp" name="img_activity[]" class="imageInput">
        @error('img_activity.*')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
      </div>
      <div class="">
        <textarea name="description_activity[]" id="" cols="25" rows="5" placeholder="Short Description" class="p-4 rounded-xl placeholder:text-black">{{ $activity['description'] ?? '' }}</textarea>
        @error('description_activity.*')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
      </div>
    </div>
    <button id="{{ $buttonId }}" type="button" class="rounded-full bg-white border-dark-grey border-[1px] px-[0.6rem] py-1 {{ $rotateButton }}">+</button>
</div>
