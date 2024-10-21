<?php

namespace App\Http\Controllers;

use App\Models\News;

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
