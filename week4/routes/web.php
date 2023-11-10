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


Route::get('/mahasiswa', function () {
    $arrMahasiswa = ["M Haikal Fuady", "Udin Tadjudin", "Alif Zaky cakraunlimited", "Andi M Fikri", "El Thorr"];
    return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
});

Route::get('/dosen', function () {
    $arrdosen = ["Andi Purnomo", "Ahlijati Nuraminah", "Aliyah", "Sri Hartati", "Muhammad Ihsan Shiddiq"];
    return view('dosen')->with('dosen', $arrdosen);
});

Route::get('/admin', function () {
    return view('admin');
});

// Route::get('uni/fmipa/matematika/mahasiswa', function () {
//     $arrMahasiswa = ["M Haikal Fuady", "Udin Tadjudin", "Alif Zaky cakraunlimited", "Andi M Fikri", "El Thorr"];
//     return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
// })->name('mahasiswa');
