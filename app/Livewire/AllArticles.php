<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class AllArticles extends Component
{

    public $articles;
    public function mount()
    {
        $this->articles = Article::with(['subarticles'])->get()->toArray();
        $this->articles = array_slice($this->articles, 10);
    }

    public function render()
    {
        return view('livewire.all-articles');
    }
}
