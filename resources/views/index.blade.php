@extends('layouts.main')

@section('title', 'Home')

@section('content')

<!-- =========================
     HERO / CONTENT
========================= -->

<section class="py-24 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6 lg:px-10">

        <!-- HEADER -->
        <div class="mb-10">

            <span class="uppercase tracking-[4px] text-blue-600 font-semibold">
                Analytics
            </span>

            <h2 class="text-4xl lg:text-5xl font-black mt-3 text-gray-900">
                Sales Overview
            </h2>

            <p class="text-gray-500 mt-3">
                Data penjualan produk selama satu tahun terakhir.
            </p>

        </div>


        <!-- =========================
             CHART CARD
        ========================== -->

        <div class="bg-white rounded-3xl shadow-lg p-6 lg:p-8">

            <!-- CARD HEADER -->
            <div class="flex flex-col md:flex-row
                        md:items-center
                        md:justify-between
                        gap-4 mb-8">

                <div>

                    <h3 class="text-2xl font-bold text-gray-900">
                        Grafik Penjualan
                    </h3>

                    <p class="text-gray-500 mt-1">
                        Performa penjualan bulanan
                    </p>

                </div>


                <!-- TOTAL -->
                <div class="bg-blue-50 rounded-2xl px-5 py-3">

                    <p class="text-sm text-gray-500">
                        Total Penjualan
                    </p>

                    <p class="text-xl font-bold text-blue-600">
                        {{ number_format(array_sum($data_penjualan)) }}
                    </p>

                </div>

            </div>


            <!-- =========================
                 CHART
            ========================== -->

            <div class="relative w-full h-[400px]">

                <canvas id="lineChart"></canvas>

            </div>

        </div>

    </div>

</section>


<!-- =========================
     CHART.JS
========================= -->


<script>
document.addEventListener('DOMContentLoaded', function () {

    const canvas = document.getElementById('lineChart');

    if (!canvas) {
        console.error('Canvas tidak ditemukan');
        return;
    }

    const ctx = canvas.getContext('2d');

    const labels = @json($labels);

    const salesData = @json($data_penjualan);

    console.log('Labels:', labels);
    console.log('Sales:', salesData);

    new Chart(ctx, {

        type: 'line',

        data: {
            labels: labels,

            datasets: [{
                label: 'Penjualan',

                data: salesData,

                borderColor: '#2563eb',

                backgroundColor: 'rgba(37, 99, 235, 0.12)',

                borderWidth: 3,

                pointBackgroundColor: '#2563eb',

                pointBorderColor: '#ffffff',

                pointBorderWidth: 2,

                pointRadius: 5,

                pointHoverRadius: 8,

                fill: true,

                tension: 0.4
            }]
        },

        options: {
            responsive: true,

            maintainAspectRatio: false,

            interaction: {
                intersect: false,
                mode: 'index'
            },

            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                },

                tooltip: {
                    enabled: true
                }
            },

            scales: {

                x: {
                    title: {
                        display: true,
                        text: 'Bulan'
                    },

                    grid: {
                        display: false
                    }
                },

                y: {
                    beginAtZero: true,

                    title: {
                        display: true,
                        text: 'Jumlah Penjualan'
                    }
                }
            }
        }
    });

});
</script>

@endsection