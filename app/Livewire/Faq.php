<?php

namespace App\Livewire;

use App\Models\Qna;
use Livewire\Component;

class Faq extends Component
{
    public $qnas = [];
    public function mount(){
        $this->qnas = Qna::all()->toArray();
    }
    public function render()
    {
        return view('livewire.faq');
    }
}
