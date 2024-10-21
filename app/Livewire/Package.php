<?php

namespace App\Livewire;
use App\Models\Paket;

use Livewire\Component;

class Package extends Component
{
    public $packages = [];

    public function mount()
    {
        $this->packages = Paket::all()->toArray();
    }

    public function render()
    {
        return view('livewire.package');
    }
}
