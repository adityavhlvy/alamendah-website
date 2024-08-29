<?php

namespace App\View\Components;

use App\Models\Article;
use App\Models\Paket;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShowSearch extends Component
{
    /**
     * Create a new component instance.
     */
    public $results;
    public function __construct(public $keywords, public $request)
    {
        if($request == "Artikel") {
            $this->results = Article::search($keywords)->with(['authors'])->get()->toArray();
        } elseif ($request == "Paket") {
            $this->results = Paket::search($keywords)->get()->toArray();
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.show-search');
    }
}
