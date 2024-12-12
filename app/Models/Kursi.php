<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursi extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'kursi';
    protected $primaryKey = 'id_studio';

    protected $fillable = [
        'id_studio',
        'kode_kursi',
        'baris',
        'kolom',
        'status_tersedia',
    ];

    public function studio()
    {
        return $this->belongsTo(Studio::class, 'id_studio');
    }

    public function tiket()
    {
        return $this->hasMany(Tiket::class, 'id_kursi');
    }
}