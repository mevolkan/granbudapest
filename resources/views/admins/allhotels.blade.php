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
                    <h5 class="card-title mb-4 d-inline">Hotels</h5>
                    <a href="{{ route('hotels.create') }}" class="btn btn-primary mb-4 text-center float-right">Add a
                        Hotel</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">location</th>
                                <th scope="col">Rooms</th>
                                <th scope="col">update</th>
                                <th scope="col">delete</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($hotels as $hotel)
                                <tr>
                                    <th scope="row">{{ $hotel->id }}</th>
                                    <td>{{ $hotel->name }}</td>
                                    <td>{{ $hotel->location }}</td>
                                    <td>1</td>
                                    <td><a href="{{ route('hotels.edit',$hotel->id) }}"
                                            class="btn btn-warning text-white text-center ">Update </a></td>
                                    <td><a href="{{ route('hotels.delete',$hotel->id) }}" class="btn btn-danger  text-center ">Delete </a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
