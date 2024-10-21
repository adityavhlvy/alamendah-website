<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Paket;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{

    public $datas;
    public $keys;
    public $id;
    public $hidden;
    public $routeName;
    public $routeAdd;
    public $routeLabel;

    public function mount($id, $hidden, $routeName, $routeAdd = null, $routeLabel = null)
    {
        $this->id = $id;
        $this->hidden = $hidden;
        $this->routeName = $routeName;
        $this->routeAdd = $routeAdd;
        $this->routeLabel = $routeLabel;
        if($id == "Artikel") {
            $this->datas = Article::with(['authors'])->get()->map(function ($item) {
                return [
                    'ID' => $item->id,
                    'Title' => $item->title,
                    'Author' => $item->authors->map(function($i) {
                        return $i->user->name;
                    })->toArray(),
                    'Date' => $item->created_at->toArray()['formatted'],
                ];
            })->toArray();
            $this->keys = ['ID', 'Title', 'Author', 'Date', 'Actions'];
        } elseif ($id == "Paket") {
            $this->datas = Paket::with(['paketoptions'])->get()->map(function ($item) {
                return [
                    'ID' => $item->id,
                    'Name' => $item->name,
                    'Price' => $item->paketoptions->map(function ($i) {
                        return 'Rp.'.$i->price.'. Minimal '.$i->minimum_person.' orang';
                    })->toArray(),
                ];
            })->toArray();
            $this->keys = ['ID', 'Name', 'Price', 'Actions'];
        } elseif ($id == "User") {
            $this->datas = User::with(['admin'])->get()->map(function ($item) {
                return [
                    'ID' => $item->id,
                    'Name' => $item->name,
                    'Email' => $item->email,
                    'Online' => (bool)$item->isOnline,
                    'isAdmin' => (bool)$item->admin->isAdmin,
                ];
            })->toArray();
            $this->keys = ['ID', 'Name', 'Email', 'Online', 'Admin', 'Actions'];
        }
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
