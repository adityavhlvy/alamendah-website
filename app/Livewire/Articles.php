<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Articles extends Component
{
    public $articles = [];

    public function mount(){
        $this->articles = Article::with(['galleries'])->get()->toArray();
    }

    public function render()
    {
        return view('livewire.articles');
    }
}
