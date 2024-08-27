<?php

namespace App\View\Components\homepage;

use App\Models\Article;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Articles extends Component
{
    /**
     * Create a new component instance.
     */
    public $articles;
    public function __construct()
    {
        $this->articles = Article::with(['galleries'])->get()->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.homepage.articles');
    }
}
