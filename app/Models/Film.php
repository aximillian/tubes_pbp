<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'films';
    protected $primaryKey = 'id_film';

    protected $fillable = [
        'judul_film',
        'deskripsi',
        'durasi',
        'sutradara',
        'rentang_usia',
        'genre',
        'poster',
        'trailer',
        'rating',
    ];
}