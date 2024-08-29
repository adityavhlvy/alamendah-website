<x-layouts.app :$title>
  <div class="p-10 flex flex-col gap-5">
    <x-show-search :request="'Paket'" :$keywords />
    <x-show-search :request="'Artikel'" :$keywords />
  </div>
</x-layouts.app>