<?php

namespace App\View\Components\listactivities;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Paket;

class detail extends Component
{
    /**
     * Create a new component instance.
     */
    public $activity;
    public function __construct(public $id)
    {
        $this->activity = Paket::with(['paketactivities'])->find($id)->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.listactivities.detail');
    }
}
