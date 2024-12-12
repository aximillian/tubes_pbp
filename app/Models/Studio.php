<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'studio';
    protected $primaryKey = 'id_studio';

    protected $fillable = [
        'nama_studio',
        'kapasitas',
    ];
}