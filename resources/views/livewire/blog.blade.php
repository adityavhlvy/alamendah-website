<x-dashboardform.template :routes="isset($article) ? route('dashboard.update-article', ['id' => $article['id']]) : route('dashboard.blogpost')">
  <div class="w-full">
      <input type="text" placeholder="Title" name="title" @isset($article) value="{{ $article['title'] }}" @endif class="text-black placeholder:text-black rounded-xl border-none outline-none p-2 w-full">
      @error('title')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
  </div>
  <div class="flex items-start gap-3">
      <div class="authors flex flex-col gap-3 items-center">
          @isset($article)
            @foreach($article['authors'] as $author)
              @if($loop->first)
                <livewire:author-input :$admins :$author>
              @else
                <livewire:author-input :$admins :$author :buttonId="'author-remove'" :rotateButton="'rotate-45'">
              @endif
            @endforeach
          @else
            <livewire:author-input $admins>
          @endif
          @error('author')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
      </div>
  </div>
  <div class="w-64">
      @isset($article)
        @foreach($article['galleries'] as $gallery)
          @if($loop->first)
            <livewire:image-input :img="$gallery['img']">
          @else
            <livewire:image-input :img="$gallery['img']" :buttonId="'Image-remove'" :rotateButton="'rotate-45'">
          @endif
        @endforeach
      @else
        <livewire:image-input>
      @endif
      @error('img')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
  </div>
  <div class="bg-white rounded-xl p-5">
      <input type="hidden" id="x" name="content" @isset($article) value="{{ $article['subarticle'] }}" @endif>
      <trix-editor input="x" class="bg-white"></trix-editor>
      @error('content')<p class="text-red-500 font-semibold self-start text-xs px-5">{{ $message }}</p>@enderror
  </div>
</x-dashboardform.template>
