<?php

namespace App\Http\Controllers\Hotels;

use App\Http\Controllers\Controller;
use App\Models\Apartment\Apartment;
use App\Models\Booking\Booking;
use App\Models\Hotel\Hotel;
use Illuminate\Http\Request;
use DateTime;
use Auth;

class HotelsController extends Controller
    {
    public function rooms($id)
        {
        $getRooms = Apartment::select()->orderBy('id', 'desc')->take(6)->where('hotel_id', $id)->get();
        return view('hotels.rooms', compact('getRooms'));
        }

    public function roomDetails($id)
        {
        $getRoom = Apartment::find($id);
        return view('hotels.roomdetails', compact('getRoom'));
        }
    public function roomBooking(Request $request, $id)
        {
            $room = Apartment::find($id);
            $hotel = Hotel::find($id);

        if (strval(date("n/j/Y")) < strval($request->check_in) and strval(date("n/j/Y")) < strval($request->check_out)) {

            if ($request->check_in < $request->check_out) {
               
                $check_in = new DateTime($request->check_in);
                $check_out = new DateTime($request->check_out);
                $days = $check_in->diff($check_out);
                $days= $days->format('%a');


                $bookRooms = Booking::create([
                    "name" => $request->name,
                    "email" => $request->email,
                    "phone_number" => $request->phone_number,
                    "check_in" => $request->check_in,
                    "check_out" => $request->check_out,
                    "days" => $days,
                    "price" => $days*($room->price),
                    "user_id" => Auth::user()->id,
                    "room_id" => $room->id,
                    "hotel_id" => $hotel->id,
                    // "status" => $request->name,
                ]
                );
                echo"Booked succesfully";
                } else {
                echo "checkout date is invalid";
                }
            } else {
            echo "invalid check in or check out date";
            }
        }
    }
