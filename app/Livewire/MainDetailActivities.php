<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Paket;

class MainDetailActivities extends Component
{

    public $activity;
    public function mount($id)
    {
        $this->activity = Paket::with(['paketactivities', 'paketoptions'])->find($id)->toArray();
    }

    public function render()
    {
        return view('livewire.main-detail-activities');
    }
}
