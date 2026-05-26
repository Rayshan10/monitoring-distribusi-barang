<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Tracking;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarang =
            Barang::count();

        $barangDiproses =
            Barang::where(
                'status',
                'Barang Diproses'
            )->count();

        $barangDikirim =
            Barang::where(
                'status',
                'Barang Dikirim'
            )->count();

        $barangSampaiGudang =
            Barang::where(
                'status',
                'Barang Sampai Gudang'
            )->count();

        $barangDiterima =
            Barang::where(
                'status',
                'Barang Diterima'
            )->count();

        $trackingTerbaru =
            Tracking::latest()
                ->take(5)
                ->get();

        return view('dashboard', compact(

            'totalBarang',

            'barangDiproses',

            'barangDikirim',

            'barangSampaiGudang',

            'barangDiterima',

            'trackingTerbaru'

        ));
    }
}