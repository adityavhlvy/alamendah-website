<?php

namespace App\View\Components\articles;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use App\Models\Article;

class MainDetailArticles extends Component
{
    /**
     * Create a new component instance.
     */
    public $article;
    public $articles;
    public function __construct(public $id)
    {
        $this->article = Article::where('id',$id)->with(['authors', 'subarticles'])->first()->toArray();
        $this->articles = Article::whereNotIn('id',[$id])->get()->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.articles.main-detail-articles');
    }
}
