<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class MainDetailArticles extends Component
{

    public $article;
    public $articles;
    public function mount($id) {
        $this->article = Article::where('id',$id)->with(['authors', 'subarticles', 'galleries'])->first()->toArray();
        $this->articles = Article::with(['galleries'])->whereNotIn('id',[$id])->get()->toArray();
    }

    public function render()
    {
        return view('livewire.main-detail-articles');
    }
}
