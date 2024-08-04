<?php

namespace App\View\Components\listactivities;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ListTypeDetailItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $list)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.listactivities.list-type-detail-item');
    }
}
