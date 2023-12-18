@extends('layouts.app')

@section('content')
<div class="hero-wrap js-fullheight ftco-section ftco-book ftco-no-pt ftco-no-pb" style="background-image: url('{{ asset('assets/images/image_2.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center " data-scrollax-parent="true">
        <div class="col-md-6 mt-5 ftco-animate">
            <form action="{{ route('register') }}" class="appointment-form" method="POST">
              @csrf
                <h3 class="mb-3">{{ __('Register') }}</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                          <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="form-group">
                          <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                      </div>
                  </div>
                
                    <div class="col-md-12">
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">
                              {{ __('Register') }}
                          </button>
                        </div>
                    </div>
                </div>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection
