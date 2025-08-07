<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\BukuuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\ArticleController;
use App\Http\Middleware\IsUser;
use App\Http\Middleware\IsAdmin;

    Route::get('/', [IndexController::class, 'index'])->name('home');
    Route::get('/read-book/{id}', [BukuController::class, 'read'])->name('read-book')->middleware('auth');
    Route::delete('/riwayat/{id}',[BukuController::class,'destroyRiwayat'])->name('riwayat.destroy');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/books', [BukuController::class, 'showBooks'])->name('books');
    Route::get('buku/kategori', [BukuController::class, 'filterKategori'])->name('buku.kategori');
    Route::get('/artikel',[ArtikelController::class,'artikel'])->name('artikel');
    Route::get('/artikel',[ArtikelController::class,'index'])->name('artikel');
    Route::get('/index',[IndexController::class,'index'])->name('index');
    Route::get('/book', [IndexController::class, 'rating_rendah'])->name('book');
    Route::get('/tentang',[TentangController::class,'tentang'])->name('tentang');
    Route::get('book/{id}',[BukuController::class,'show'])->middleware('auth');
    Route::post('/buku/{id}/rating', [BukuController::class, 'beriRating'])->name('buku.rating')->middleware('auth');
    Route::get('/anggota/pdf',[AnggotaController::class,'exporPdf'])->name('buku.anggotas.exporPdf');
// Grouping route untuk AuthController
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::prefix('bukus')->name('buku.')->group(function () {
        Route::get('', [BukuuController::class, 'index'])->name('index');
        Route::get('create', [BukuuController::class, 'create'])->name('create');
        Route::post('store', [BukuuController::class, 'store'])->name('store');
        Route::get('show/{id}', [BukuuController::class, 'show'])->name('show');
        Route::get('edit/{id}', [BukuuController::class, 'edit'])->name('edit');
        Route::put('edit/{id}', [BukuuController::class, 'update'])->name('update');
        Route::delete('destroy/{id}', [BukuuController::class, 'destroy'])->name('destroy');
    });
    Route::prefix('bukus')->name('buku.')->group(function () {
        // Rute untuk anggota
        Route::get('anggota', [AnggotaController::class, 'index'])->name('anggotas.index');
        Route::get('anggota/create', [AnggotaController::class, 'create'])->name('anggotas.create');
        Route::post('anggota', [AnggotaController::class, 'store'])->name('anggotas.store');
        Route::get('anggota/{anggota}', [AnggotaController::class, 'show'])->name('anggotas.show');
        Route::get('anggota/{anggota}/edit', [AnggotaController::class, 'edit'])->name('anggotas.edit');
        Route::put('anggota/{anggota}', [AnggotaController::class, 'update'])->name('anggotas.update');
        Route::delete('anggota/{anggota}', [AnggotaController::class, 'destroy'])->name('anggotas.destroy');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('articles', ArticleController::class);
    Route::resource('pengguna', PenggunaController::class);

    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::put('/profile', [AuthController::class, 'updateProfile'])->name('profile.update');
});
    Route::middleware([IsUser::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
    Route::middleware([IsAdmin::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

});