<?php

namespace app\Http\Controllers;

use app\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::latest()->take(10)->get();
        return view('home', compact('news'));
    }
}
