<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OngkirDomisili extends Model
{
    use HasFactory;
    protected $primaryKey = 'ongkir_id';
    protected $table = 'ongkir_domisili';
    protected $fillable = [
        'alamat',
        'harga'
    ];
}
