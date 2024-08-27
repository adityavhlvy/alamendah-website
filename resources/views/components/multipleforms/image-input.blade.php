@props(['img'])
<div class="flex flex-col images gap-2">
    <div class="image flex flex-row items-center gap-7">
      <div class="w-40 sm:w-auto">
        @isset($img)
            <input type="hidden" name="img_old[]" value="{{ $img }}"> 
        @endif
        <input type="file" name="img[]">
        @error('img.*')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
      </div>
      <button id="{{ $buttonId }}" type="button" class="rounded-full bg-white border-dark-grey border-[1px] px-[0.7rem] py-1 {{ $rotateButton }}">+</button>
    </div>
</div>