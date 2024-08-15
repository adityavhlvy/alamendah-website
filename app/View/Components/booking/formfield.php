<?php

namespace App\View\Components\booking;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class formfield extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $id, public $label)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.booking.formfield');
    }
}
