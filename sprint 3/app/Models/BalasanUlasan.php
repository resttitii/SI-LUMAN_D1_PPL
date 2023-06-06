<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalasanUlasan extends Model
{
    use HasFactory;
    protected $primaryKey = 'balasan_id';
    protected $table = 'balasan_ulasan';
    protected $fillable = [
        'ulasan_id',
        'deskripsi'
    ];
}
