<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\Apartment\Apartment;
use App\Models\Hotel\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AdminsController extends Controller
    {
    public function viewLogin()
        {
        return view('admins.login');
        }

    public function checkLogin(Request $request)
        {

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            return redirect()->route('admins.dashboard');
            }
        return redirect()->back()->with(['error' => 'error logging in']);

        }

    public function index()
        {
        $adminsCount = Admin::select()->count();
        $hotelsCount = Hotel::select()->count();
        $roomsCount = Apartment::select()->count();

        return view('admins.index', compact('adminsCount', 'hotelsCount', 'roomsCount'));
        }
        public function allAdmins(){
            $admins = Admin::select()->orderBy('id', 'asc')->get();
            return view('admins.alladmins', compact('admins'));
        }

        public function createAdmins(){
            
            return view('admins.createadmins');
        }
        public function storeAdmins(Request $request){
            $storeAdmins = Admin::create([
                "name"=> $request->name,
                "email"=> $request->email,
                "password"=> Hash::make($request->password),
            ]);
            if($storeAdmins){
                return Redirect::route('admins.all')->with(['success'=>'Admin created successfully']);
            }
        }

        public function allHotels(){
            $hotels = Hotel::select()->orderBy('id', 'asc')->get();
            return view('admins.allhotels', compact('hotels'));
        }
        public function createHotels(){
            
            return view('admins.createhotels');
        }

        public function storehotels(Request $request){
            Request()->validate([
                "name"=>"required | max:40",
                "image"=>"required | image| mimes:jpeg,jpg,png|max:1000",
                "description"=>"required",
                "location"=>"required | max:40",
                "amenities"=>"required ",
            ]);

            $destinationPath = 'assets/images/';
            $myimage = $request->image->getClientOriginalName();
            $request->image->move(public_path($destinationPath), $myimage);

            $storeHotels = Hotel::create([
                "name"=> $request->name,
                "description"=> $request->description,
                "image"=> $myimage,
                "location"=>$request->location,
                "amenities"=>$request->amenities,
            ]);
            if($storeHotels){
                return Redirect::route('hotels.all')->with(['success'=>'Hotel created successfully']);
            }
        }

        public function editHotels($id){
            $hotel = Hotel::find($id);

            return view('admins.edithotels', compact('hotel'));
        }
        public function updateHotels(Request $request, $id){
            Request()->validate([
                "name"=>"required | max:40",
                // "image"=>"required | image| mimes:jpeg,jpg,png|max:1000",
                "description"=>"required",
                "location"=>"required | max:40",
                "amenities"=>"required ",
            ]);
            $hotel = Hotel::find($id);
            $hotel->update($request->all());
            if($hotel){
                return Redirect::route('hotels.all')->with(['update'=>'Hotel updated successfully']);
            }
        }
    }
