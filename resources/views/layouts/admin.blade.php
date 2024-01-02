<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="{{ asset('assets/css/admin-css.css') }}" rel="stylesheet">
    {{-- <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    {{-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}
   <!-- Scripts -->
   @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="wrapper">
        <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('admins.dashboard') }}">LOGO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    @auth('admin')
                        <ul class="navbar-nav side-nav">
                            <li class="nav-item">
                                <a class="nav-link" style="margin-left: 20px;" href="{{ route('admins.dashboard') }}">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admins.all') }}" style="margin-left: 20px;">Admins</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('hotels.all') }}"
                                    style="margin-left: 20px;">Hotels</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('rooms.all') }}" style="margin-left: 20px;">Rooms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('bookings.all') }}"
                                    style="margin-left: 20px;">Bookings</a>
                            </li>
                        </ul>
                    @endauth

                    <ul class="navbar-nav ml-md-auto d-md-flex">
                        @auth('admin')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admins.dashboard') }}">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::guard('admin')->user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item"  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">Logout</a>

                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('view.login') }}">login
                                </a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <main class="">
                @yield('content')
            </main>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('assets/js/google-map.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
