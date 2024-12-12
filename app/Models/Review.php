<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'reviews';
    protected $primaryKey = 'id_review';

    protected $fillable = [
        'id_customer',
        'id_film',
        'rating',
        'review',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    public function film()
    {
        return $this->belongsTo(Film::class, 'id_film');
    }
}