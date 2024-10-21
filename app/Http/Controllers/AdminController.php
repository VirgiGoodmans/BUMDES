<?php

namespace app\Http\Controllers;

use app\Models\Wisata;
use app\Models\Spot;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $wisata = Wisata::all();
        return view('admin.dashboard', compact('wisata'));
    }

    public function manageWisata()
    {
        $wisata = Wisata::all();
        return view('admin.manage_wisata', compact('wisata'));
    }

    public function manageSpot($wisataId)
    {
        $spots = Spot::where('wisata_id', $wisataId)->get();
        return view('admin.manage_spot', compact('spots'));
    }

    public function managePemesanan()
    {
        $pemesanan = Pemesanan::all();
        return view('admin.manage_pemesanan', compact('pemesanan'));
    }
}
