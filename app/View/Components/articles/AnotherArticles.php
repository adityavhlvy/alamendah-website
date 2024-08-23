<?php

namespace App\View\Components\articles;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class AnotherArticles extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $articles)
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.articles.another-articles');
    }
}
