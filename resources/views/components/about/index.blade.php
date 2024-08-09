<div class="w-full items-center justify-center p-10 sm:p-40">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
        @foreach($admins as $admin)
            <x-about.admin :$admin />
        @endforeach
    </div>
</div>