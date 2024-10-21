<?php

namespace App\Livewire;

use Livewire\Component;

class ImageInput extends Component
{

    public $buttonId;
    public $rotateButton;

    public function __construct($buttonId = 'Image-add', $rotateButton = '')
    {
        $this->buttonId = $buttonId;
        $this->rotateButton = $rotateButton;
    }

    public function render()
    {
        return view('livewire.image-input');
    }
}
