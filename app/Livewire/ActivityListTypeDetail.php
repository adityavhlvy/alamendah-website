<?php

namespace App\Livewire;

use Livewire\Component;

class ActivityListTypeDetail extends Component
{

    public $activity;
    public function mount($activity)
    {
        $activities = [];
        foreach($activity['paketactivities'] as $act) {
            array_push($activities, $act['activity']);
        }
        $this->activity = $activities;
    }

    public function render()
    {
        return view('livewire.activity-list-type-detail');
    }
}
