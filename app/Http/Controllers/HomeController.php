<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $labels = [
            'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        ];

        $data_penjualan = [
            50,
            190,
            150,
            250,
            220,
            300,
            350,
            400,
            450,
            500,
            550,
            600
        ];

        return view('index', [
            'labels' => $labels,
            'data_penjualan' => $data_penjualan
        ]);
    }
}