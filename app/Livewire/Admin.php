<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Admin as Adm;
use App\Models\User;

class Admin extends Component
{

    public $admins;
    public function mount()
    {
        $this->admins = Adm::with(['achievements'])->where('isAdmin', true)->get()->toArray();
    }

    public function render()
    {
        return view('livewire.admin');
    }
}
