<?php

namespace App\View\Components\multipleforms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectOptionsPackage extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $buttonId, public $rotate = '', public $option)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.multipleforms.select-options-package');
    }
}
