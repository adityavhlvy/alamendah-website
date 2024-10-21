<x-admin.layout-template>
  @if(session('success'))
    <div class="p-5 bg-green-300 text-green-700 rounded-xl text-center">{{ session('success') }}</div>
  @endif
  <livewire:dashboard
    :routeAdd="route('dashboard.blog')"
    :hidden="''"
    :id="'Artikel'"
    :routeLabel="'Tambah Artikel'"
    :routeName="'article'"
  />
  <livewire:dashboard
    :id="'Paket'"
    :hidden="'hidden'"
    :routeAdd="route('dashboard.package')"
    :routeLabel="'Tambah Paket'"
    :routeName="'activity'"
  />
  <livewire:dashboard
    :id="'User'"
    :hidden="'hidden'"
    :routeName="'user'"
  />
</x-admin.layout-template>
