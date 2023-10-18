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

Route::get('pegawai', function (){
    return view('pegawai');
});

Route::get('inventaris', function (){
    return view('inventaris');
});

Route::get('laporan', function (){
    return view('laporan');
});

Route::get('tentang', function (){
    return 'Web for inventory management at market warehouse';
});

Route::get('versi', function(){
    $laravel = app();
    return "Web ini dikerjakan dengan laravel versi: ".$laravel::VERSION;
});