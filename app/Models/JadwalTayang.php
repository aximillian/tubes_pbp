<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalTayang extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'jadwal_tayang';
    protected $primaryKey = 'id_jadwal_tayang';
    
    protected $fillable = [
        'id_film',
        'id_studio',
        'tanggal_tayang',
        'waktu_tayang',
    ];

    public function film()
    {
        return $this->belongsTo(Film::class, 'id_film');
    }

    public function studio()
    {
        return $this->belongsTo(Studio::class, 'id_studio');
    }

    public function pemesananTiket()
    {
        return $this->hasMany(PemesananTiket::class, 'id_jadwal_tayang');
    }
}