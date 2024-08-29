<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Paket;
use App\Models\Recent;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function article() {
        return view('article', [
            'title' => 'Article',
        ]);
    }
    
    public function about() {
        return view('about', [
            'title' => 'About Us',
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
        if(!$article) {
            return redirect()->route('main.index');
        }
        return view('detail_article', [
            'title' => $article->title,
            'id' => $article->id
        ]);
    }

    public function booking() {
        return view('booking', [
            'title' => 'Booking',
        ]);
    }

    public function search(Request $request) {
        return view('search', [
            'title' => "Search",
            'keywords' => $request->search
        ]);
    }
}
