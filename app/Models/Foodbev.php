<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodbev extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'foodbevs';
    protected $primaryKey = 'id_item';

    protected $fillable = [
        'nama_item',
        'kategori_item',
        'deskripsi_item',
        'harga_item',
        'gambar_item',
    ];
}