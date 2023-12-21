<?php

namespace App\Http\Controllers\Hotels;

use App\Http\Controllers\Controller;
use App\Models\Apartment\Apartment;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function rooms($id){
        $getRooms = Apartment::select()->orderBy('id', 'desc')->take(6)->where('hotel_id', $id)->get();
        return view('hotels.rooms', compact('getRooms'));
    }
}
