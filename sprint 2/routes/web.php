<?php
//route => penghubung antara user dengan keselutuhan framework
//web.php => routing di web => akses halaman di web browser

use App\Http\Controllers\AppController as App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

//Route::<jenis method>(<alamat URL>,<proses yang dijalankan>)
Route::get('/', [App::class, 'beranda'])->name('beranda'); //beranda
//konsultasi
Route::prefix('/konsultasi')->group(function () {
    Route::get('/', [App::class, 'konsultasi'])->name('konsultasi'); //semua pertanyaan atau keluhan
    Route::get('/ditanggapi', [App::class, 'ditanggapi'])->name('ditanggapi'); //keluhan yang sudah memiliki tanggapan
    Route::get('/belum_ditanggapi', [App::class, 'belum_ditanggapi'])->name('belum_ditanggapi'); //keluhan yang tidak memiliki tanggapan
});
//toko
Route::get('/toko', [App::class, 'toko'])->name('toko'); //sprint 3

//http => middleware => cek hak akses user => penengah antara controller dan route => authentikasi
Route::middleware('auth')->group(function () {
    Route::middleware('verified')->group(function () { //cek apakah role sudah verified atau belum => karena untuk role pelanggan bisa saja belum verified
        //hak akses keluhan hanya untuk peternak dan pelanggan
        Route::middleware('cekrole:peternak,pelanggan')->group(function () { 
            Route::get('/tambah_keluhan', [App::class, 'tambah_keluhan'])->name('tambah_keluhan');
            Route::post('/buat_keluhan', [App::class, 'buat_keluhan']);
            Route::post('/hapus_keluhan/{keluhan_id}', [App::class, 'hapus_keluhan']);
            Route::get('/konsultasi_lanjutan', [App::class, 'konsultasi_lanjutan'])->name('konsultasi_lanjutan');
        });
    });

    Route::get('/tanggapan/{keluhan_id}', [App::class, 'tanggapan']);

    //hak akses tanggapan hanya untuk dokter, peternak, dan pelanggan
    Route::middleware('cekrole:dokter,pelanggan,peternak')->group(function () {
        Route::get('/tambah_tanggapan/{keluhan_id}', [App::class, 'tambah_tanggapan']);
        Route::post('/buat_tanggapan', [App::class, 'buat_tanggapan']);
        Route::post('/hapus_tanggapan/{tanggapan_id}', [App::class, 'hapus_tanggapan']);
    });

    //akses untuk upgrade role hanya untuk pelanggan
    Route::middleware('cekrole:pelanggan')->group(function () {
        Route::get('/upgrade_role', [App::class, 'upgrade_role'])->name('upgrade_role');
    });

    //akses untuk edit profile hanya untuk pelanggan, peternak, dan dokter
    Route::get('/profile', [App::class, 'profile'])->name('profile');
    Route::get('/edit_profile/{user_id}', [App::class, 'edit_profile']);
    Route::post('/update_profile/{user_id}', [App::class, 'update_profile']);

    //akses edit tanggapan hanya untuk dokter
    Route::middleware('cekrole:dokter')->group(function () {
        Route::get('/edit_tanggapan/{tanggapan_id}/{keluhan_id}', [App::class, 'edit_tanggapan']);
        Route::post('/update_tanggapan/{tanggapan_id}', [App::class, 'update_tanggapan']);
    });

    //akses untuk role admin
    Route::middleware('cekrole:admin')->group(function () {
        Route::get('/data_pelanggan', [App::class, 'data_pelanggan'])->name('data_pelanggan');
        Route::get('/data_peternak', [App::class, 'data_peternak'])->name('data_peternak');
        Route::get('/data_dokter', [App::class, 'data_dokter'])->name('data_dokter');
        Route::get('/change_role', [App::class, 'change_role'])->name('change_role');
        Route::post('/change_role/{user_id}', [App::class, 'update_role']);
        Route::post('/hapus_user/{user_id}', [App::class, 'hapus_user']);
    });
});
