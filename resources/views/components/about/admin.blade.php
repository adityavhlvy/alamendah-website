<div class="w-full flex flex-col">
    <img src="{{ asset('storage/'.$admin['img']) }}" alt="" class="w-full rounded-t-3xl">
    <x-about.admin-data :$admin />
</div>