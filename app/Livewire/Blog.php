<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Admin;

class Blog extends Component
{
    public $admins = null;
    public $article = [];

    public function mount($article = null)
    {
        $this->article = $article;
        $this->admins = Admin::where('isAdmin', true)->get()->toArray();
    }

    public function render()
    {
        return view('livewire.blog');
    }
}
