<?php

namespace app\Http\Controllers;

use app\Models\Wisata;
use app\Models\Spot;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function show($id)
    {
        $wisata = Wisata::find($id);
        $spots = Spot::where('wisata_id', $id)->get();
        return view('wisata.show', compact('wisata', 'spots'));
    }
}
