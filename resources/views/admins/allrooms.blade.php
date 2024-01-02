@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                @if (session()->has('success'))
                    <div class="alert alert-danger">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if (session()->has('update'))
                    <div class="alert alert-danger">
                        {{ session()->get('update') }}
                    </div>
                @endif
                @if (session()->has('delete'))
                    <div class="alert alert-danger">
                        {{ session()->get('delete') }}
                    </div>
                @endif

                <div class="card-body">
                    <h5 class="card-title mb-4 d-inline">Rooms</h5>
                    <a href="{{ route('rooms.add') }}" class="btn btn-primary mb-4 text-center float-right">Add Room</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">price</th>
                                <th scope="col">num of persons</th>
                                <th scope="col">size</th>
                                <th scope="col">view</th>
                                <th scope="col">num of beds</th>
                                <th scope="col">hotel name</th>
                                <th scope="col">Booked</th>
                                <th scope="col">Update</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rooms as $room)
                                <tr>
                                    <th scope="row">{{ $room->id }}</th>
                                    <td>{{ $room->name }}</td>
                                    <td>{{ $room->price }}</td>
                                    <td>{{ $room->people }}</td>
                                    <td>{{ $room->size }}</td>
                                    <td>{{ $room->view }}</td>
                                    <td>{{ $room->beds }}</td>
                                    <td>{{ $room->hotel_id }}</td>
                                    <td>?</td>

                                    <td><a href="status.html" class="btn btn-danger  text-center ">Update</a></td>
                                    <td><a href="{{ route('rooms.delete', $room->id) }}" class="btn btn-danger  text-center ">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
