<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Paket;

class Travel extends Controller
{
    public function index() {
        return view('home', [
            'title' => 'Homepage'
        ]);
    }
    public function activity() {
        return view('activity', [
            'title' => 'Activity'
        ]);
    }
    public function activityShow($id) {
        $paket = Paket::find($id);
        return view('detail_activity', [
            'title' => $paket->name." Detail",
            'id' => $paket->id
        ]);
    }
    public function articleShow($id) {
        $article = Article::find($id);
        return view('detail_article', [
            'title' => $article->title,
            'id' => $article->id
        ]);
    }
}
