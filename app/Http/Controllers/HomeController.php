<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama.
     */
    public function index()
    {
        // Menampilkan view untuk halaman utama
        return view('home');  // Pastikan file 'home.blade.php' ada di folder resources/views
    }
}
