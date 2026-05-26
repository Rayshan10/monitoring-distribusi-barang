@extends('layouts.app')

@section('content')

<div class="card card-dashboard">
    <div class="card-body">
        <h3 class="mb-4">Detail Barang</h3>
        <table class="table">
            <tr>
                <th>Kode Barang</th>
                <td>{{ $barang->kode_barang }}</td>
            </tr>
            <tr>
                <th>Nama Barang</th>
                <td>{{ $barang->nama_barang }}</td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td>{{ $barang->kategori }}</td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td>{{ $barang->jumlah }}</td>
            </tr>
            <tr>
                <th>Deskripsi</th>
                <td>{{ $barang->deskripsi }}</td>
            </tr>
            <tr>
                <th>Status Barang</th>
                <td>{{ $barang->status }}</td>
            </tr>
        </table>

        <hr>
        <h3 class="mb-4">Timeline Distribusi</h3>
        <div class="timeline">
            @foreach($barang->trackings as $tracking)
            <div class="card mb-3">
                <div class="card-body">
                    <h5>{{ $tracking->status }}</h5>
                    <p class="mb-1">Lokasi:{{ $tracking->lokasi }}</p>
                    <small class="text-muted">{{ $tracking->created_at->format('d M Y H:i') }}</small>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection