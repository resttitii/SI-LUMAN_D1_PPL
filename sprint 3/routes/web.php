<?php

use App\Http\Controllers\AppController as App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('/', [App::class, 'beranda'])->name('beranda');
Route::prefix('/konsultasi')->group(function () {
    Route::get('/', [App::class, 'konsultasi'])->name('konsultasi');
    Route::get('/ditanggapi', [App::class, 'ditanggapi'])->name('ditanggapi');
    Route::get('/belum_ditanggapi', [App::class, 'belum_ditanggapi'])->name('belum_ditanggapi');
});
Route::get('/toko', [App::class, 'toko'])->name('toko');

Route::middleware('auth')->group(function () {
    Route::middleware('verified')->group(function () {
        Route::middleware('cekrole:peternak,pelanggan')->group(function () {
            Route::get('/tambah_keluhan', [App::class, 'tambah_keluhan'])->name('tambah_keluhan');
            Route::post('/buat_keluhan', [App::class, 'buat_keluhan']);
            Route::post('/hapus_keluhan/{keluhan_id}', [App::class, 'hapus_keluhan']);
            Route::get('/konsultasi_lanjutan', [App::class, 'konsultasi_lanjutan'])->name('konsultasi_lanjutan');
        });
    });

    Route::get('/tanggapan/{keluhan_id}', [App::class, 'tanggapan']);

    Route::middleware('cekrole:dokter,pelanggan,peternak')->group(function () {
        Route::get('/tambah_tanggapan/{keluhan_id}', [App::class, 'tambah_tanggapan']);
        Route::post('/buat_tanggapan', [App::class, 'buat_tanggapan']);
        Route::post('/hapus_tanggapan/{tanggapan_id}', [App::class, 'hapus_tanggapan']);
    });

    Route::middleware('cekrole:admin,peternak,pelanggan')->group(function () {
        Route::get('/transaksi', [App::class, 'transaksi'])->name('transaksi');
    });

    Route::middleware('cekrole:pelanggan')->group(function () {
        Route::get('/upgrade_role', [App::class, 'upgrade_role'])->name('upgrade_role');
        Route::get('/keranjang', [App::class, 'keranjang'])->name('keranjang');
        Route::get('/kontak_peternak/{user_id}', [App::class, 'kontak_peternak']);
        Route::post('/create_keranjang', [App::class, 'create_keranjang']);
        Route::post('/hapus_keranjang', [App::class, 'hapus_keranjang']);
        Route::post('/create_checkout', [App::class, 'create_checkout']);
        Route::get('/checkout/{kode_transaksi}', [App::class, 'checkout']);
        Route::post('/update_checkout/{kode_transaksi}', [App::class, 'update_checkout']);
        Route::get('/form_bayar/{kode_transaksi}', [App::class, 'form_bayar']);
        Route::get('/ulasan/{produk_id}', [App::class, 'ulasan']);
        Route::post('/create_ulasan', [App::class, 'create_ulasan']);
        Route::post('/hapus_ulasan/{ulasan_id}', [App::class, 'hapus_ulasan']);
        Route::get('/detail_transaksi/{kode_transaksi}', [App::class, 'detail_transaksi']);
    });

    Route::get('/profile', [App::class, 'profile'])->name('profile');

    Route::middleware('cekrole:pelanggan,peternak,dokter')->group(function () {
        Route::get('/edit_profile/{user_id}', [App::class, 'edit_profile']);
        Route::post('/update_profile/{user_id}', [App::class, 'update_profile']);
    });

    Route::middleware('cekrole:dokter')->group(function () {
        Route::get('/edit_tanggapan/{tanggapan_id}/{keluhan_id}', [App::class, 'edit_tanggapan']);
        Route::post('/update_tanggapan/{tanggapan_id}', [App::class, 'update_tanggapan']);
    });

    Route::middleware('cekrole:admin')->group(function () {
        Route::get('/data_pelanggan', [App::class, 'data_pelanggan'])->name('data_pelanggan');
        Route::get('/data_peternak', [App::class, 'data_peternak'])->name('data_peternak');
        Route::get('/data_dokter', [App::class, 'data_dokter'])->name('data_dokter');
        Route::get('/change_role', [App::class, 'change_role'])->name('change_role');
        Route::post('/change_role/{user_id}', [App::class, 'update_role']);
        Route::post('/hapus_user/{user_id}', [App::class, 'hapus_user']);
        Route::post('/update_statusAdmin/{kode_transaksi}', [App::class, 'update_statusAdmin']);
    });

    Route::middleware('cekrole:peternak')->group(function () {
        Route::get('/produk', [App::class, 'produk'])->name('produk');
        Route::get('/create_produk', [App::class, 'create_produk'])->name('create_produk');
        Route::post('/handleCreateProduk', [App::class, 'handleCreateProduk'])->name('handleCreateProduk');
        Route::get('/edit_produk/{produk_id}', [App::class, 'edit_produk']);
        Route::post('/update_produk/{produk_id}', [App::class, 'update_produk']);
        Route::post('/hapus_produk/{produk_id}', [App::class, 'hapus_produk']);
        Route::post('/update_statusPembayaran/{kode_transaksi}/{toko_id}', [App::class, 'update_statusPembayaran']);
        Route::post('/update_statusPengiriman/{kode_transaksi}/{toko_id}', [App::class, 'update_statusPengiriman']);
        Route::get('/balas_ulasan/{ulasan_id}', [App::class, 'balas_ulasan']);
        Route::post('/create_balas_ulasan', [App::class, 'create_balas_ulasan']);
        Route::get('/edit_balas_ulasan/{ulasan_id}/{balasan_id}', [App::class, 'edit_balas_ulasan']);
        Route::post('/update_balas_ulasan/{balasan_id}', [App::class, 'update_balas_ulasan']);
        Route::post('/hapus_balas_ulasan/{balasan_id}', [App::class, 'hapus_balas_ulasan']);
        Route::get('/rekap_transaksi', [App::class, 'rekap_transaksi'])->name('rekap_transaksi');
        Route::get('/rekap_penilaian/{produk_id}', [App::class, 'rekap_penilaian']);
    });

    Route::get('/detail_produk/{produk_id}', [App::class, 'detail_produk']);
    Route::get('/detail_toko/{user_id}', [App::class, 'detail_toko']);
});
