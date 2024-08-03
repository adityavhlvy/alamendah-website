<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
