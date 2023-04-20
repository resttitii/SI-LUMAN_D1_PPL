<?php
//web.php => akses halaman di web browser
//route => penghubung antara user dengan keseluruhan framework
use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Auth; //illuminate => namespace
use Illuminate\Support\Facades\Route; //facades => class bantu

Auth::routes(['verify' => true]);

//Route::<jenis method>(<alamat URL>,<proses yang dijalankan>)
Route::get('/', [AppController::class, 'beranda'])->name('beranda');
Route::get('/konsultasi', [AppController::class, 'konsultasi'])->name('konsultasi');
Route::get('/toko', [AppController::class, 'toko'])->name('toko');

// http => middleware => cek hak akses user => penengah antara controller dan route => authentikasi
Route::middleware('auth')->group(function () {
    Route::get('/profile', [AppController::class, 'profile'])->name('profile');
    Route::get('/upgrade_role', [AppController::class, 'upgrade_role'])->name('upgrade_role');
    Route::get('/edit_profile/{id}', [AppController::class, 'edit_profile']);
    Route::post('/update_profile/{id}', [AppController::class, 'update_profile']);

    Route::middleware('cekrole:admin')->group(function () {
        Route::get('/data_pelanggan', [AppController::class, 'data_pelanggan'])->name('data_pelanggan');
        Route::get('/data_peternak', [AppController::class, 'data_peternak'])->name('data_peternak');
        Route::get('/data_dokter', [AppController::class, 'data_dokter'])->name('data_dokter');
        Route::get('/change_role', [AppController::class, 'change_role'])->name('change_role');
        Route::post('/change_role/{id}', [AppController::class, 'update_role']);
        Route::post('/hapus_user/{id}', [AppController::class, 'hapus_user']);
    });
});
