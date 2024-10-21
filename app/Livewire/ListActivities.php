<?php

namespace App\Livewire;

use App\Models\Paket;
use Livewire\Component;

class ListActivities extends Component
{

    public $listactivities = [];

    // Mengambil data dari database di dalam lifecycle hook mount()
    public function mount()
    {
        $this->listactivities = Paket::with(['paketoptions', 'paketactivities'])->get()->toArray();
    }

    public function render()
    {
        return view('livewire.list-activities');
    }
}
