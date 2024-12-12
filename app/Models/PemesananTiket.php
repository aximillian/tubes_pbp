<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananTiket extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'pemesanan_tiket';
    protected $primaryKey = 'id_pemesanan_tiket';

    protected $fillable = [
        'id_customer',
        'id_jadwal_tayang',
        'id_studio',
        'jumlah_tiket',
        'total_harga',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    public function jadwalTayang()
    {
        return $this->belongsTo(JadwalTayang::class, 'id_jadwal_tayang');
    }

    public function studio()
    {
        return $this->belongsTo(Studio::class, 'id_studio');
    }

    public function tiket()
    {
        return $this->hasMany(Tiket::class, 'id_pemesanan_tiket');
    }
}