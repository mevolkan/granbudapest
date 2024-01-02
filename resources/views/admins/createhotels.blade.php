@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">Add Hotel</h5>
                    <form method="POST" action="{{ route('hotels.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="name" id="name" class="form-control" placeholder="name" />
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

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                            @if ($errors->has('description'))
                                <p class="alert alert-success">{{ $errors->first('description') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="amenities">Amenities</label>
                            <textarea class="form-control" name="amenities" id="amenities" rows="3"></textarea>
                            @if ($errors->has('amenities'))
                                <p class="alert alert-success">{{ $errors->first('amenities') }}</p>
                            @endif
                        </div>

                        <div class="form-outline mb-4 mt-4">
                            <label for="location">Location</label>
                            <input type="text" name="location" id="location" class="form-control" />
                            @if ($errors->has('location'))
                                <p class="alert alert-success">{{ $errors->first('location') }}</p>
                            @endif
                        </div>
                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
