<?php

namespace App\View\Components\svg;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class calendar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $width, public $height, public $color = "white")
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.svg.calendar');
    }
}
