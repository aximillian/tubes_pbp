<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tiket';
    protected $primaryKey = 'id_tiket';

    protected $fillable = [
        'id_pemesanan_tiket',
        'id_kursi',
        'kode_tiket',
        'nomor_kursi',
    ];

    public function pemesananTiket()
    {
        return $this->belongsTo(PemesananTiket::class, 'id_pemesanan_tiket');
    }

    public function kursi()
    {
        return $this->belongsTo(Kursi::class, 'id_kursi');
    }
}