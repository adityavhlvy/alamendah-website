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
    public function activityShow($id) {
        $paket = Paket::find($id);
        return view('detail_activity', [
            'title' => $paket->name." Detail",
            'id' => $paket->id
        ]);
    }
    public function articleShow($id) {
        $article = Article::find($id);
        if(Auth::user() && $article){
            Recent::create([
                'user_id' => Auth::user()->id,
                'article_id' => $article->id
            ]);
        } elseif(!$article) {
            return redirect()->route('main.index');
        }
        return view('detail_article', [
            'title' => $article->title,
            'id' => $article->id
        ]);
    }
}
