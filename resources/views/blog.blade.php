<x-layouts.app :$title>
  @isset($article)
    <x-pages.admin.blog :$article />
  @else
    <x-pages.admin.blog />
  @endif
</x-layouts.app>