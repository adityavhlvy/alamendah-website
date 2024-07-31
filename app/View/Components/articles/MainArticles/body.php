<?php

namespace App\View\Components\articles\MainArticles;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class body extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $articles)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.articles.main-articles.body');
    }
}
