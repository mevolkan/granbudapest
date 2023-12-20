<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;
    protected $table = "hotels";

    protected $fillable = [
        'name',
        'image',
        'description',
        'location',
        'amenities'
    ];
    public $timestamps = true;
}
