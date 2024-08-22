<?php

namespace App\View\Components\dashboardform;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class template extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $routes)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboardform.template');
    }
}
