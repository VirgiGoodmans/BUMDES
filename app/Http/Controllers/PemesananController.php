<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Spot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function create(Request $request, $spotId)
    {
        $spot = Spot::find($spotId);

        // Validasi ketersediaan spot
        $exists = Pemesanan::where('spot_id', $spotId)
            ->where('tanggal', $request->tanggal)
            ->where('jam', $request->jam)
            ->exists();

        if ($exists) {
            return back()->withErrors(['error' => 'Spot sudah dipesan pada waktu tersebut.']);
        }

        Pemesanan::create([
            'user_id' => Auth::id(),
            'spot_id' => $spotId,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
        ]);

        return redirect()->route('pemesanan.success');
    }

    public function success()
    {
        return view('pemesanan.success');
    }
}
