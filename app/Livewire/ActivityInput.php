<?php

namespace App\Livewire;

use Livewire\Component;

class ActivityInput extends Component
{
    public $buttonId = 'Activity-add';
    public $rotateButton = '';
    public $activity;

    public function mount($buttonId = 'Activity-add', $rotateButton = '', $activity = null) {
        $this->$buttonId = $buttonId;
        $this->$rotateButton = $rotateButton;
        $this->activity = $activity;
    }

    public function render()
    {
        return view('livewire.activity-input');
    }
}
