<?php

namespace App\View\Components\listactivities;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ListTypeDetail extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $activity)
    {
        $activities = [];
        foreach($this->activity['paketactivities'] as $act) {
            array_push($activities, $act['activity']);
        }
        $this->activity = $activities;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.listactivities.list-type-detail');
    }
}
