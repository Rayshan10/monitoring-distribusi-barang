@extends('layouts.app')

@section('content')

<div class="card card-dashboard">

    <div class="card-body">

        <h3>

            Statistik Kurir

        </h3>

        <hr>

        <h5>

            {{ $kurir->name }}

        </h5>

        <div class="row mt-4">

            <div class="col-md-4">

                <div class="card shadow-sm">

                    <div class="card-body text-center">

                        <h6>Total Aktivitas</h6>

                        <h2>

                            {{ $totalAktivitas }}

                        </h2>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card shadow-sm">

                    <div class="card-body text-center">

                        <h6>Barang Dikirim</h6>

                        <h2 class="text-warning">

                            {{ $barangDikirim }}

                        </h2>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card shadow-sm">

                    <div class="card-body text-center">

                        <h6>Barang Diterima</h6>

                        <h2 class="text-success">

                            {{ $barangDiterima }}

                        </h2>

                    </div>

                </div>

            </div>

        </div>

        <hr>

        <canvas id="grafikKurir"></canvas>

    </div>

</div>

<script>

const ctx = document
    .getElementById('grafikKurir');

new Chart(ctx, {

    type: 'bar',

    data: {

        labels: [
            @foreach($aktivitasBulanan as $item)
                'Bulan {{ $item->bulan }}',
            @endforeach
        ],

        datasets: [{

            label: 'Aktivitas',

            data: [

                @foreach($aktivitasBulanan as $item)

                    {{ $item->total }},

                @endforeach

            ]

        }]

    }

});

</script>

@endsection