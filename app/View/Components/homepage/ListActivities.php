<?php

namespace App\View\Components\homepage;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ListActivities extends Component
{
    /**
     * Create a new component instance.
     */
    public $listactivities;
    public function __construct()
    {
        $this->listactivities = [
            [
                "name"=>"Activity Name",
                "price"=>"xx.000",
                "date" => "21",
                "month" => "October",
                "year" => "2024",
                "clock"=> "07:00",
                "img"=>"img/activity.png"
            ],
            [
                "name"=>"Activity Name",
                "price"=>"xx.000",
                "date" => "21",
                "month" => "October",
                "year" => "2024",
                "clock"=> "07:00",
                "img"=>"img/activity.png"
            ],
            [
                "name"=>"Activity Name",
                "price"=>"xx.000",
                "date" => "21",
                "month" => "October",
                "year" => "2024",
                "clock"=> "07:00",
                "img"=>"img/activity.png"
            ],
            [
                "name"=>"Activity Name",
                "price"=>"xx.000",
                "date" => "21",
                "month" => "October",
                "year" => "2024",
                "clock"=> "07:00",
                "img"=>"img/activity.png"
            ],
            [
                "name"=>"Activity Name",
                "price"=>"xx.000",
                "date" => "21",
                "month" => "October",
                "year" => "2024",
                "clock"=> "07:00",
                "img"=>"img/activity.png"
            ],
            [
                "name"=>"Activity Name",
                "price"=>"xx.000",
                "date" => "21",
                "month" => "October",
                "year" => "2024",
                "clock"=> "07:00",
                "img"=>"img/activity.png"
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.homepage.list-activities');
    }
}
