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
    public $recents = [];
    public function __construct(public $articles)
    {
        if(Auth::user()){
            $recents = Auth::user()->recents->toArray();
            $limitations = 3;
            if(count($recents) < $limitations) {
                $limitations = count($recents);
            }
            for($i = count($recents)-1; $i >= (count($recents)-($limitations)); $i--) {
                array_push($this->recents, $recents[$i]['article']);
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.articles.another-articles');
    }
}
