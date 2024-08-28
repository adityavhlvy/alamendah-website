<?php

namespace App\View\Components\booking;

use App\Models\Paket;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class formdata extends Component
{
    /**
     * Create a new component instance.
     */
    public $packages;
    public function __construct()
    {
        $this->packages = Paket::all()->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.booking.formdata');
    }
}
