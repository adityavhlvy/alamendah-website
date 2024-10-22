<x-layouts.app :title="$title">
  {{-- section header --}}
  <x-homepage.header />

  {{-- section plan your trip --}}
  <x-homepage.activities />

  {{-- section activities --}}
  {{-- <x-homepage.list-activities /> --}}
  <livewire:list-activities></livewire:list-activities>

  {{-- section news & articles --}}
  <livewire:articles></livewire:articles>
</x-layouts.app>
