<?php

namespace App\View\Components\about;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class index extends Component
{
    /**
     * Create a new component instance.
     */
    public $admins;
    public function __construct()
    {
        $this->admins = [
            [
                'name' => 'Ahmad Santoso',
                'position' => 'Eco-Tourism Coordinator',
                'achievement' => ['Cerficate Digital Marketing BNSP'],
                'img' => 'user/user1.png',
            ],
            [
                'name' => 'Ahmad Santoso',
                'position' => 'Eco-Tourism Coordinator',
                'achievement' => ['Cerficate Digital Marketing BNSP'],
                'img' => 'user/user2.png',
            ],
            [
                'name' => 'Ahmad Santoso',
                'position' => 'Eco-Tourism Coordinator',
                'achievement' => ['Cerficate Digital Marketing BNSP'],
                'img' => 'user/user3.png',
            ],
            [
                'name' => 'Ahmad Santoso',
                'position' => 'Eco-Tourism Coordinator',
                'achievement' => ['Cerficate Digital Marketing BNSP'],
                'img' => 'user/user4.png',
            ],
            [
                'name' => 'Ahmad Santoso',
                'position' => 'Eco-Tourism Coordinator',
                'achievement' => ['Cerficate Digital Marketing BNSP'],
                'img' => 'user/user5.png',
            ],
            [
                'name' => 'Ahmad Santoso',
                'position' => 'Eco-Tourism Coordinator',
                'achievement' => ['Cerficate Digital Marketing BNSP'],
                'img' => 'user/user6.png',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about.index');
    }
}
