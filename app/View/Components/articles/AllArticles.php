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
        $articles = Article::with(['subarticles', 'viewer'])->get()->toArray();
        usort($articles, function ($a, $b) {
            return $b['id'] <=> $a['id'];
        });
        $recents = array_column(array_slice($articles, 0, 3), 'id');
        usort($articles, function ($a, $b) {
            $countA = is_null($a['viewer']) ? 0 : count($a['viewer']);
            $countB = is_null($b['viewer']) ? 0 : count($b['viewer']);
            return $countB <=> $countA;
        });
        $popular = array_column(array_slice($articles, 0, 7), 'id');
        $id = array_unique(array_merge($recents, $popular));
        $this->articles = array_filter($articles, function($article) use ($id) {
            return !in_array($article['id'], $id);
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.articles.all-articles');
    }
}
