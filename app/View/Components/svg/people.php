<?php

namespace App\View\Components\svg;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class people extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $bgcolor = "white", public $color = "black", public $width = 30, public $height = 30)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.svg.people');
    }
}
