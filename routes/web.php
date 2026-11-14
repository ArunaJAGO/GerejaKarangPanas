<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'beranda')->name('beranda');
Route::view('/jadwal-misa', 'jadwal-misa')->name('jadwal-misa');
Route::view('/warta-paroki', 'warta-paroki')->name('warta-paroki');
Route::view('/pelayanan-sakramen', 'pelayanan-sakramen')->name('pelayanan-sakramen');
Route::view('/profil-omk', 'profil-omk')->name('profil-omk');
Route::view('/persembahan-donasi', 'persembahan-donasi')->name('persembahan-donasi');
Route::prefix('portal-umat')->name('portal.')->group(function () {
    Route::get('/', fn () => redirect()->route('portal.login'))->name('index');
    Route::view('/login', 'portal.login')->name('login');
    Route::view('/daftar', 'portal.daftar')->name('daftar');

    // SEMENTARA: backend belum ada, jadi form hanya menampilkan pesan ini
    Route::post('/login', fn () => back()->withInput()
        ->with('info', 'Login belum diaktifkan. Hubungi sekretariat paroki.'))->name('login.submit');
    Route::post('/daftar', fn () => back()->withInput()
        ->with('info', 'Pendaftaran online belum diaktifkan. Hubungi sekretariat paroki.'))->name('daftar.submit');
});