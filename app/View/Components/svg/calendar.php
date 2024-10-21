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
    public $color;
    public function __construct(public $width, public $height, $color = "white")
    {
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.svg.calendar');
    }
}
