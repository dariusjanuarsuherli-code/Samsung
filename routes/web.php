<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
    $data_penjualan = [12000, 1900, 3000, 2500, 2000, 3200, 4000, 3500, 2800, 3900, 4500, 10230];

    return view('index', compact('labels', 'data_penjualan'));
});