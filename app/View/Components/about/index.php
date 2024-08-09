<?php

namespace App\View\Components\about;

use App\Models\Admin;
use App\Models\User;
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
        $this->admins = Admin::with(['achievements'])->where('isAdmin', true)->get()->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about.index');
    }
}
