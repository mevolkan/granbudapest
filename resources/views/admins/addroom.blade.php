@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">Add Room</h5>
                    <form method="POST" action="{{ route('rooms.save') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="Room name" />
                            @if ($errors->has('name'))
                                <p class="alert alert-success">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                        <div class="form-outline mb-4 mt-4">
                            <input type="file" name="image" id="image" class="form-control" />
                            @if ($errors->has('image'))
                                <p class="alert alert-success">{{ $errors->first('image') }}</p>
                            @endif
                        </div>
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="price" id="price" class="form-control" placeholder="price" />
                            @if ($errors->has('price'))
                                <p class="alert alert-success">{{ $errors->first('price') }}</p>
                            @endif
                        </div>
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="people" id="people" class="form-control" placeholder="people" />
                            @if ($errors->has('people'))
                                <p class="alert alert-success">{{ $errors->first('people') }}</p>
                            @endif
                        </div>
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="beds" id="beds" class="form-control" placeholder="beds" />
                            @if ($errors->has('beds'))
                                <p class="alert alert-success">{{ $errors->first('beds') }}</p>
                            @endif
                        </div>
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="size" id="size" class="form-control" placeholder="size" />
                            @if ($errors->has('size'))
                                <p class="alert alert-success">{{ $errors->first('size') }}</p>
                            @endif
                        </div>
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="view" id="view" class="form-control" placeholder="view" />
                            @if ($errors->has('view'))
                                <p class="alert alert-success">{{ $errors->first('view') }}</p>
                            @endif
                        </div>
                        <select name="hotel_id" class="form-control">
                            <option>Choose Hotel Name</option>
                            @foreach ($hotels as $hotel)
                                <option value="{{ $hotel->id }}">{{ $hotel->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('hotel_id'))
                            <p class="alert alert-success">{{ $errors->first('hotel_id') }}</p>
                        @endif
                        <br>
                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
