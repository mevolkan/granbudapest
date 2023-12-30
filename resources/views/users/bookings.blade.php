@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Check in</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Days</th>
                    <th scope="col">Price</th>
                    <th scope="col">Booked by</th>
                    <th scope="col">Room</th>
                    <th scope="col">Hotel</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <th scope="row">{{ $booking->id }}</th>
                        <th scope="row">{{ $booking->email }}</th>
                        <th scope="row">{{ $booking->name }}</th>
                        <th scope="row">{{ $booking->phone_number }}</th>
                        <th scope="row">{{ $booking->check_in }}</th>
                        <th scope="row">{{ $booking->check_out }}</th>
                        <th scope="row">{{ $booking->days }}</th>
                        <th scope="row">{{ $booking->price }}</th>
                        <th scope="row">{{ $booking->user_id }}</th>
                        <th scope="row">{{ $booking->room_id }}</th>
                        <th scope="row">{{ $booking->hotel_id }}</th>
                        <th scope="row">{{ $booking->status }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
