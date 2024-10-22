<x-layouts.app :$title>
  @isset($article)
    <livewire:blog :$article></livewire:blog>
  @else
    <livewire:blog></livewire:blog>
  @endif
</x-layouts.app>
