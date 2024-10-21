<?php

namespace App\Livewire;

use Livewire\Component;

class AuthorInput extends Component
{
    public $admins;
    public $buttonId;
    public $rotateButton;
    public $author;

    public function mount($admins, $buttonId = "author-add", $rotateButton = "", $author = null) {
        $this->admins = $admins;
        $this->buttonId = $buttonId;
        $this->rotateButton = $rotateButton;
        $this->author = $author;
    }
    public function render()
    {
        return view('livewire.author-input');
    }
}
