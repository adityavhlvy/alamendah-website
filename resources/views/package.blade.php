<x-layouts.app :$title>
  @isset($package)
    <x-pages.admin.package :datas="$package" />
  @else
    <x-pages.admin.package />
  @endif
</x-layouts.app>