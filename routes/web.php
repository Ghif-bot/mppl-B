<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/daftar', function () {
    return view('daftar');
});


Route::get('/profile', function () {
    return view('profil');
});

Route::get('/utama', function () {
    return view('admin.utama');
});

Route::get('/transaksi', function () {
    return view('admin.transaksi');
});

Route::get('/tambah', function () {
    return view('admin.tambah');
});