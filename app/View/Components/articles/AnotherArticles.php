<?php

namespace App\View\Components\articles;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AnotherArticles extends Component
{
    /**
     * Create a new component instance.
     */
    public $recents;
    public function __construct(public $articles)
    {
        $this->recents = [
            [
                'title' => "Top 10 Activities to Experience in Alamendah Village",
                'img' => 'recent-1.png',
            ],
            [
                'title' => "Unveiling the Beauty of Alamendah: A Journey through Nature and Culture",
                'img' => 'recent-2.png',
            ],
            [
                'title' => "Escape to Alamendah: Discover West Java's Best-Kept Secret",
                'img' => 'recent-3.png',
            ],
        ];   
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.articles.another-articles');
    }
}
