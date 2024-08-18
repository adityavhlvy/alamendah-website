<?php

namespace App\View\Components\articles;

use App\Models\Article;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DetailArticles extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $article, public $populars, public $recents)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.articles.detail-articles');
    }
}
