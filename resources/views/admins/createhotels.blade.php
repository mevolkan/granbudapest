@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-5 d-inline">Create Hotel</h5>
                    <form method="POST" action="{{ route('hotels.store') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4 mt-4">
                            <input type="text" name="name" id="name" class="form-control" placeholder="name" />

                        </div>

                        <div class="form-outline mb-4 mt-4">
                            <input type="file" name="image" id="image" class="form-control" />

                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="amenities">Amenities</label>
                            <textarea class="form-control" name="amenities" id="amenities" rows="3"></textarea>
                        </div>

                        <div class="form-outline mb-4 mt-4">
                            <label for="location">Location</label>

                            <input type="text" name="location" id="location" class="form-control" />

                        </div>
                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
