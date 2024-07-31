<?php

namespace App\View\Components\homepage;

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
        $this->articles = [
            [
                'title' => "The Ultimate Travel Guid to Alamendah: What to See and Do",
                'img' => 'articles-1.png',
            ],
            [
                'title' => "The Untouched Beauty of Alamendah: A Hidden Paradise",
                'img' => 'articles-2.png',
            ],
            [
                'title' => "5 Reasons to Visit Alamendah Village This Year",
                'img' => 'articles-3.png',
            ],
            [
                'title' => "Alamendah's Must See Attractions for First-Time Visitors",
                'img' => 'articles-4.png',
            ],
            [
                'title' => "A Day in Alamendah: Your Perfect Ltinerary for Nature and Culture",
                'img' => 'articles-5.png',
            ],
            [
                'title' => "A Family-Friendly Guide to Exploring Alamendah Village",
                'img' => 'articles-6.png',
            ],
            [
                'title' => "A Weekend Gateway to Alamendah: Embrace Nature and Culture",
                'img' => 'articles-7.png',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.homepage.articles');
    }
}
