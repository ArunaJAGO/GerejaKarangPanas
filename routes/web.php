<?php

use App\Http\Controllers\PortalAdminController;
use App\Http\Controllers\PortalAuthController;
use App\Http\Controllers\PublicContentController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'beranda')->name('beranda');
Route::view('/jadwal-misa', 'jadwal-misa')->name('jadwal-misa');
Route::view('/warta-paroki', 'warta-paroki')->name('warta-paroki');
Route::get('/konten', [PublicContentController::class, 'index'])->name('public.contents.index');
Route::get('/konten/{slug}', [PublicContentController::class, 'show'])->name('public.contents.show');
Route::view('/pelayanan-sakramen', 'pelayanan-sakramen')->name('pelayanan-sakramen');
Route::view('/profil-omk', 'profil-omk')->name('profil-omk');
Route::view('/persembahan-donasi', 'persembahan-donasi')->name('persembahan-donasi');
Route::prefix('portal-umat')->name('portal.')->group(function () {
    Route::get('/', fn () => auth()->check()
        ? redirect()->route(auth()->user()->role === 'umat' ? 'beranda' : 'admin.dashboard')
        : redirect()->route('portal.login'))->name('index');
    Route::get('/login', [PortalAuthController::class, 'showLogin'])->name('login');
    Route::view('/daftar', 'portal.daftar')->name('daftar');
    Route::post('/login', [PortalAuthController::class, 'login'])->middleware('throttle:5,1')->name('login.submit');
    Route::post('/daftar', [PortalAuthController::class, 'register'])->middleware('throttle:3,1')->name('daftar.submit');
    Route::post('/logout', [PortalAuthController::class, 'logout'])->middleware('auth')->name('logout');
});

Route::middleware(['auth', 'role:admin,superadmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [PortalAdminController::class, 'index'])->name('dashboard');
    Route::post('/contents', [PortalAdminController::class, 'storeContent'])->name('contents.store');
    Route::put('/contents/{content}', [PortalAdminController::class, 'updateContent'])->name('contents.update');
    Route::delete('/contents/{content}', [PortalAdminController::class, 'destroyContent'])->name('contents.destroy');

    Route::middleware('role:superadmin')->post('/accounts', [PortalAdminController::class, 'storeAccount'])->name('accounts.store');
});
