<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use Illuminate\Support\Facades\Auth;

class RiwayatPengirimanController extends Controller
{
    public function index()
    {
        $riwayat = Tracking::with(
                'barang',
                'user'
            )
            ->where(
                'user_id',
                    Auth::id()
            )
            ->latest()
            ->get();

        return view(
            'kurir.riwayat',
            compact('riwayat')
        );
    }
}