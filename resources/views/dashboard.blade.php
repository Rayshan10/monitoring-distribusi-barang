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

</div>

@endsection