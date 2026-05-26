<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
    'kode_barang',
    'nama_barang',
    'kategori',
    'jumlah',
    'deskripsi',
    'qr_code',
    'status',

    'urgensi',
    'lama_penyimpanan',
    'tingkat_keterlambatan',

    'nilai_saw',
    ];

    public function trackings()
    {
        return $this->hasMany(Tracking::class)
            ->latest();
    }

    public function getRouteKeyName()
    {
        return 'kode_barang';
    }
}