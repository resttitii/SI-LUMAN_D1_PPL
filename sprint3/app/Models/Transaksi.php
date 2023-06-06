<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primaryKey = 'transaksi_id';
    protected $fillable = [
        'user_id',
        'kode_transaksi',
        'expiry',
        'total_harga',
        'biaya_ongkir',
        'biaya_admin',
        'status_admin',
        'status_pembayaran',
        'status_pengiriman'
    ];
    public function getTransaksiAdmin()
    {
        return DB::table('transaksi')
            ->join('keranjang', 'transaksi.kode_transaksi', '=', 'keranjang.kode_transaksi')
            ->join('users AS cust', 'transaksi.user_id', '=', 'cust.user_id')
            ->join('users AS toko', 'keranjang.toko_id', '=', 'toko.user_id')
            ->select('transaksi.*', 'cust.username AS cust_username', 'toko.username AS toko_username')
            ->get();
    }

    public function getRekapPeternak()
    {
        return DB::table('transaksi')
            ->join('keranjang', 'transaksi.kode_transaksi', '=', 'transaksi.kode_transaksi')
            ->join('users', 'keranjang.cust_id', '=', 'users.user_id')
            ->join('produk', 'keranjang.produk_id', '=', 'produk.produk_id')
            ->where('keranjang.toko_id', auth()->user()->user_id)
            ->select(['transaksi.created_at', 'produk.nama_produk', 'users.username', 'transaksi.total_harga'])
            ->get();
    }

    public function getTransaksiPeternak()
    {
        return DB::table('transaksi')
            ->join('keranjang', 'transaksi.kode_transaksi', '=', 'transaksi.kode_transaksi')
            ->join('users', 'keranjang.cust_id', '=', 'users.user_id')
            ->where('keranjang.toko_id', auth()->user()->user_id)
            ->get();
    }

    public function getTransaksiPelanggan()
    {
        return DB::table('transaksi')
            ->join('keranjang', 'transaksi.kode_transaksi', '=', 'transaksi.kode_transaksi')
            ->join('users', 'keranjang.toko_id', '=', 'users.user_id')
            ->where('keranjang.cust_id', auth()->user()->user_id)
            ->where('status', 'checkout')
            ->get();
    }
}
