<?php

namespace app\Http\Controllers;

use app\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel 'news'
        $news = News::all();

        // Kirim data 'news' ke view 'news.blade.php'
        return view('news', compact('news'));
    }
}
