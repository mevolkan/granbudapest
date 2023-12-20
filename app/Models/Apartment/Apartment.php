<?php

namespace App\Models\Apartment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $table = "apartments";
    protected $fillable = [
        'name',
        'image',
        'people',
        'size',
        'view',
        'beds',
        'rating',
        'price',
        'hotel_id'
    ];
    public $timestamps = true;
}
