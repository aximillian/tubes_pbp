<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KursiPemesananTiket extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'kursi_pemesanan_tiket';

    protected $fillable = [
        'id_pemesanan_tiket',
        'id_kursi',
    ];
 
}