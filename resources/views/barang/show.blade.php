@extends('layouts.app')

@section('content')

<div class="card card-dashboard">

    <div class="card-body">

        <h3 class="mb-4">
            Detail Barang
        </h3>

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

        </table>

    </div>

</div>

@endsection