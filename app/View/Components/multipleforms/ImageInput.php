<?php

namespace App\View\Components\multipleforms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $buttonId = 'Image-add', public $rotateButton = '')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.multipleforms.image-input');
    }
}
