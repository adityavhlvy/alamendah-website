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
    public $recents;
    public $popular;
    public function __construct()
    {
        $articles = Article::with(['viewer'])->get()->toArray();
        usort($articles, function ($a, $b) {
            return $b['id'] <=> $a['id'];
        });
        $this->recents = array_slice($articles, 0, 3);
        usort($articles, function ($a, $b) {
            $countA = is_null($a['viewer']) ? 0 : count($a['viewer']);
            $countB = is_null($b['viewer']) ? 0 : count($b['viewer']);
            return $countB <=> $countA;
        });
        $this->popular = array_slice($articles, 0, 7);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.homepage.articles');
    }
}
