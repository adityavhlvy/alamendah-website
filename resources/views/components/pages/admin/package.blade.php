@props(['datas'])
<x-dashboardform.template :routes="isset($datas) ? route('dashboard.update-activity', ['id' => $datas['id']]) : route('dashboard.add-package')">
  <div class="w-64 sm:w-96 md:w-64 lg:w-96">
    <input type="text" placeholder="Package Name" name="package_name" class="text-black placeholder:text-black rounded-xl border-none outline-none p-2 w-full" @isset($datas) value="{{ $datas['name'] }}" @endif>
    @error('package_name')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
  </div>
  <div class="w-64 sm:w-96 md:w-64 lg:w-96">
    <input type="text" placeholder="Slogan" name="package_slogan" class="text-black placeholder:text-black rounded-xl border-none outline-none p-2 " @isset($datas) value="{{ $datas['slogan'] }}" @endif>
    @error('package_slogan')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
  </div>
  <div class="flex items-start gap-3">
    <div class="options flex flex-col items-start lg:items-center gap-3">
      @isset($datas)
        @foreach($datas['paketoptions'] as $option)
          @if($loop->first)
            <x-multipleforms.select-options-package :buttonId="'Option-add'" :option="$option" />
          @else
            <x-multipleforms.select-options-package :buttonId="'Option-remove'" :rotate="'rotate-45'" :option="$option" />
          @endif
        @endforeach
      @else
        <x-multipleforms.select-options-package :buttonId="'Option-add'" />
      @endif
    </div>  
  </div>
  <div class="">
    @isset($datas)
      <input type="hidden" name="img_package_old" value="{{ $datas['img'] }}">
    @endif
    <input type="file" name="img_package" id="imageInput" @isset($datas) src="{{ asset('storage/'.$datas['img']) }}" value="{{ $datas['img'] }}" @endif>
    @error('img_package')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
  </div>
  <div class="w-full">
    <textarea name="description_package" class="rounded-3xl p-4 placeholder:text-black focus:outline-none appearance-none w-full" id="" cols="25" rows="10" placeholder="Description">@isset($datas) {{ $datas['description'] }} @endif</textarea>
    @error('description_package')<p class="text-red-500 font-semibold self-start text-xs px-2 pt-2">{{ $message }}</p>@enderror
  </div>
  <div id="Activity" class="flex flex-col items-center justify-center w-full">
    @isset($datas)
      @foreach($datas['paketactivities'] as $paketactivities)
        @if($loop->first)
          <x-multipleforms.activity-input :activity="$paketactivities['activity']"  />
        @else
          <x-multipleforms.activity-input :buttonId="'Activity-remove'" :rotateButton="'rotate-45'" :activity="$paketactivities['activity']" />
        @endif
      @endforeach
    @else
      <x-multipleforms.activity-input />
    @endif
  </div>
</x-dashboardform.template>
