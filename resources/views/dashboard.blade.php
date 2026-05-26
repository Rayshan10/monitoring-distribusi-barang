@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <h2 class="mb-4">
        Dashboard Monitoring Logistik
    </h2>

    <div class="row">

        <!-- Total Barang -->
        <div class="col-md-3 mb-4">

            <div class="card shadow border-0">

                <div class="card-body">

                    <h6 class="text-muted">
                        Total Barang
                    </h6>

                    <h2>
                        {{ $totalBarang }}
                    </h2>

                </div>

            </div>

        </div>

        <!-- Diproses -->
        <div class="col-md-3 mb-4">

            <div class="card shadow border-0 bg-warning text-white">

                <div class="card-body">

                    <h6>
                        Barang Diproses
                    </h6>

                    <h2>
                        {{ $barangDiproses }}
                    </h2>

                </div>

            </div>

        </div>

        <!-- Dikirim -->
        <div class="col-md-3 mb-4">

            <div class="card shadow border-0 bg-primary text-white">

                <div class="card-body">

                    <h6>
                        Barang Dikirim
                    </h6>

                    <h2>
                        {{ $barangDikirim }}
                    </h2>

                </div>

            </div>

        </div>

        <!-- Diterima -->
        <div class="col-md-3 mb-4">

            <div class="card shadow border-0 bg-success text-white">

                <div class="card-body">

                    <h6>
                        Barang Diterima
                    </h6>

                    <h2>
                        {{ $barangDiterima }}
                    </h2>

                </div>

            </div>

        </div>

    </div>

    <!-- Timeline Aktivitas -->
    <div class="card shadow border-0">

        <div class="card-body">

            <h4 class="mb-4">
                Aktivitas Distribusi Terbaru
            </h4>

            <table class="table table-bordered">

                <thead>

                    <tr>

                        <th>Status</th>

                        <th>Lokasi</th>

                        <th>Waktu</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($trackingTerbaru as $tracking)

                    <tr>

                        <td>
                            {{ $tracking->status }}
                        </td>

                        <td>
                            {{ $tracking->lokasi }}
                        </td>

                        <td>
                            {{ $tracking->created_at->format('d M Y H:i') }}
                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

    
<!-- Ranking Prioritas Distribusi -->

<div class="card shadow border-0 mt-4">

    <div class="card-body">

        <h4 class="mb-4">

            Ranking Prioritas Distribusi
            (Metode SAW)

        </h4>

        @php
    $topPriority = $rankingSAW->first();
@endphp

@if($topPriority)

<div class="alert alert-danger">

    <h5>
        Barang Prioritas Tertinggi
    </h5>

    <strong>
        {{ $topPriority->kode_barang }}
    </strong>
    -
    {{ $topPriority->nama_barang }}

    <br>

    Nilai SAW:
    {{ $topPriority->nilai_saw }}

</div>

@endif


            <a href="/hitung-saw" class="btn btn-success mb-4">
                Hitung Prioritas Distribusi (SAW)
            </a>
        <table class="table table-bordered">

            <thead class="table-dark">

                <tr>

                    <th>Ranking</th>

                    <th>Kode Barang</th>

                    <th>Nama Barang</th>

                    <th>Nilai SAW</th>

                    <th>Prioritas</th>

                </tr>

            </thead>

            <tbody>

                @foreach($rankingSAW as $index => $b)

                <tr>

                    <td>
                        {{ $index + 1 }}
                    </td>

                    <td>
                        {{ $b->kode_barang }}
                    </td>

                    <td>
                        {{ $b->nama_barang }}
                    </td>

                    <td>

                        <strong>
                            {{ $b->nilai_saw }}
                        </strong>

                    </td>

                    <td>

                        @if($b->nilai_saw >= 0.80)

                            <span class="badge bg-danger">
                                Sangat Prioritas
                            </span>

                        @elseif($b->nilai_saw >= 0.60)

                            <span class="badge bg-warning text-dark">
                                Prioritas
                            </span>

                        @else

                            <span class="badge bg-success">
                                Normal
                            </span>

                        @endif

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>
</div>

@endsection