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
    public $recents;
    public $populars;
    public function __construct(public $id)
    {
        $this->article = Article::where('id',$id)->with(['authors', 'subarticles'])->first()->toArray();
        $allArticle = Article::whereNotIn('id',[$id])->with(['viewer'])->get()->toArray();
        usort($allArticle, function ($a, $b) {
            $countA = is_null($a['viewer']) ? 0 : count($a['viewer']);
            $countB = is_null($b['viewer']) ? 0 : count($b['viewer']);
            return $countB <=> $countA;
        });
        $this->populars = array_slice($allArticle, 0, 3);
        $popularIds = array_column($this->populars, 'id');
        usort($allArticle, function ($a, $b) {
            return $b['id'] <=> $a['id'];
        });
        $recents = array_filter($allArticle, function($article) use ($popularIds) {
            return !in_array($article['id'], $popularIds);
        });
        $this->recents = array_slice($recents, 0, 3);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.articles.main-detail-articles');
    }
}
