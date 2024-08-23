<?php

namespace App\View\Components\articles;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Article;

class AllArticles extends Component
{
    /**
     * Create a new component instance.
     */
    public $articles;
    public function __construct()
    {
        $this->articles = Article::with(['subarticles'])->get()->toArray();
        $this->articles = array_slice($this->articles, 10);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.articles.all-articles');
    }
}
