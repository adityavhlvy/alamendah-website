<?php

namespace App\View\Components\multipleforms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AuthorInput extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $admins, public $buttonId = "author-add", public $rotateButton = "")
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.multipleforms.author-input');
    }
}
