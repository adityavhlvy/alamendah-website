<?php

namespace App\Livewire;

use Livewire\Component;

class SelectOptions extends Component
{

    public $buttonId;
    public $rotate;
    public $option;

    public function mount($buttonId, $rotate = null, $option = null) {
        $this->buttonId = $buttonId;
        $this->rotate = $rotate;
        $this->option = $option;
    }

    public function render()
    {
        return view('livewire.select-options');
    }
}
