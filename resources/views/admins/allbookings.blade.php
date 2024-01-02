@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4 d-inline">Bookings</h5>
        
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">email</th>
                <th scope="col">Phone number</th>
                <th scope="col">Check In</th>
                <th scope="col">Check Out</th>
                <th scope="col">Days</th>
                <th scope="col">Price</th>
                <th scope="col">Booked By</th>
                <th scope="col">Room</th>
                <th scope="col">Hotel</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking )
                <tr>
                    <th scope="row">{{ $booking->id }}</th>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->email }}</td>
                    <td>{{ $booking->phone_number }}</td>
                    <td>{{ $booking->check_in }}</td>
                    <td>{{ $booking->check_out }}</td>
                    <td>{{ $booking->days }}</td>
                    <td>{{ $booking->price }}</td>
                    <td>{{ $booking->user_id }}</td>
                    <td>{{ $booking->room_id }}</td>
                    <td>{{ $booking->hotel_id }}</td>
                     <td><a href="delete-posts.html" class="btn btn-danger  text-center ">delete</a></td>
                  </tr>
                @endforeach
            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>

@endsection