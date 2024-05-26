<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

route::get('/','berandaController@index')->name('beranda');
route::get('/data-karyawan','karyawanController@index')->name('karyawan');
route::get('/create-karyawan','karyawanControllercreate')->name('create-karyawan');
route::get('/siman-karyawan','karyawanControllersimpan')->name('simpan-karyawan');