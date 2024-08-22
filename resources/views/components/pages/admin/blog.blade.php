<x-dashboardform.template :routes="route('dashboard.blogpost')">
  <div class="w-full">
      <input type="text" placeholder="Title" name="title" class="text-black placeholder:text-black rounded-xl border-none outline-none p-2 w-full">
      @error('title')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
  </div>
  <div class="flex items-start gap-3">
      <div class="authors flex flex-col gap-3 items-center">
          <div class="author flex flex-row items-center gap-3">
            <select name="author[]" class="text-black rounded-xl border-none outline-none p-2 w-52"> 
              <option selected disabled>Pick Author</option>
              @foreach($admins as $admin)
                <option value="{{ $admin['user_id'] }}">{{ $admin['user']['name'] }}</option>
              @endforeach
            </select>
            <button id="author-add" type="button" class="rounded-full bg-white border-dark-grey border-[1px] px-[0.6rem] py-1">+</button>
          </div>
          @error('author')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
      </div>
  </div>
  <div class="w-64">
      <input type="file" name="img" class="w-full p-2 rounded-xl">
      @error('img')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
  </div>
  <div class="bg-white rounded-xl p-5">
      <input type="hidden" id="x" name="content">
      <trix-editor input="x" class="bg-white"></trix-editor>
      @error('content')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
  </div>
</x-dashboardform.template>