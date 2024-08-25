<?php

namespace App\View\Components\admin;

use App\Models\Article;
use App\Models\Paket;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class table extends Component
{
    /**
     * Create a new component instance.
     */
    public $datas;
    public $keys;
    public function __construct(public $id, public $hidden, public $routeAdd, public $routeLabel, public $routeName)
    {
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
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.table');
    }
}
