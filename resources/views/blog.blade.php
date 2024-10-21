<x-layouts.app :$title>
  @isset($article)
    <livewire:blog :$article>
  @else
    <livewire:blog>
  @endif
</x-layouts.app>
