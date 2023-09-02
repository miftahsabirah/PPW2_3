<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about',[
        "name" => "miftah",
        "email" => "miftah@gmail.com"
    ]);
});

Route::get('/dataDiri', function () {
    return view('DataDiri', array('nama' => 'naresa', 'umur' => '30 Tahun','email' => 'naresa@gmail.com',
    'no' => '08678543656', 'alamat' => 'Jakarta'));
});

Route::get('/asalSekolah', function () {
    return view('AsalSekolah', array('sekolahAsal' => 'SMP 21', 'alamatSekolah' => 'Jalan majujaya nomor xx'));
});