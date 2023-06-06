<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Keranjang extends Model
{
    use HasFactory;
    protected $table = 'keranjang';
    protected $primaryKey = 'keranjang_id';
    protected $fillable = [
        'toko_id',
        'kode_transaksi',
        'produk_id',
        'cust_id',
        'stock',
        'status'
    ];

    public function produk(): BelongsTo
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }

    public function toko(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
