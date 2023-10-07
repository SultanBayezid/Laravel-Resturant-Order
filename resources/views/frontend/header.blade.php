<!DOCTYPE html>
<html lang="en">

<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Title -->
<title>Bombay Spice</title>

<!-- Favicons -->
<link rel="shortcut icon" href="assets/img/favicon.png">
<link rel="apple-touch-icon" href="assets/img/favicon_60x60.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon_76x76.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon_120x120.png">
<link rel="apple-touch-icon" sizes="152x152" href="{{asset('frontend/assets/img/favicon_152x152.png')}}">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<!-- CSS Core -->
<link rel="stylesheet" href="{{asset('frontend/dist/css/core.css')}}" />
<link rel="stylesheet" href="{{asset('frontend/dist/css/custom.css')}}">
<!-- CSS Theme -->
<link id="theme" rel="stylesheet" href="{{asset('frontend/dist/css/theme-green.css')}}" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body>

<!-- Body Wrapper -->
<div id="body-wrapper" class="animsition">

    <!-- Header -->
    <header id="header" class="light">

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- Logo -->
                    <div class="module module-logo-horizontal">
                        <a href="{{route('frontend.home')}}">
                            <img src="{{asset('frontend/assets/img/logo.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <!-- Navigation -->
                    <nav class="module module-navigation left mr-4">
    <ul id="nav-main" class="nav nav-main">
        <li><a href="{{ route('frontend.home') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('frontend.menu') }}" class="{{ request()->is('menu') ? 'active' : '' }}">Menu</a></li>
        <li><a href="{{ route('frontend.review') }}" class="{{ request()->is('review') ? 'active' : '' }}">Reviews</a></li>
        <li><a href="{{ route('frontend.contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a></li>
    </ul>
</nav>


                </div>
                <div class="col-md-2">
                    <div class="module module-navigation ">
                    <div class="custom-dropdown">
                    @if(auth()->check())
                        <!-- User is logged in -->
                        <button class="dropdown-btn" id="dropdown-btn">
                        <i class="ti ti-user"></i>&nbsp;{{ auth()->user()->first_name }}
                            &nbsp;<i class="fa fa-caret-down dropdown-icon"></i>
                        </button>
                        <div class="dropdown-content" id="dropdown-content">
                            <a href="{{route('user.profile')}}" class="dropdown-item"> <i class="ti ti-user"></i> My Profile</a>
                            <a href="{{route('user.order_history')}}" class="dropdown-item"><i class="ti ti-file"></i> Order History</a>
                            <a href="{{route('user.review')}}" class="dropdown-item"><i class="ti ti-star"></i> Reviews</a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="ti ti-lock"></i> Log Out</button>
                            </form>

                        </div>
                     

                    @else
                        <!-- User is not logged in -->
                        <div class="btn-group">
                        <a href="{{route('login')}}" class="btn btn-success btn-sm mr-2">Login</a>
                        <a href="{{route('register')}}" class="btn btn-success btn-sm">Register</a>
                        </div>
                   


                    @endif
                </div>

                    </div>

                </div>
                <div class="col-md-2">

                    <a href="{{route('frontend.cart')}}" class="module module-cart right">
                        <span class="cart-icon">
                            <i class="ti ti-shopping-cart"></i>
                            <span class="notification" id="cart-count">0</span> <!-- Cart Count -->
                        </span>
                        <span class="cart-value">£<span class="value" id="cart-total">0.00</span></span> <!-- Cart Total -->
                    </a>

                </div>
            </div>
        </div>

    </header>
    <!-- Header / End -->

    <!-- Header -->
    <header id="header-mobile" class="light">

        <div class="module module-nav-toggle">
            <a href="#" id="nav-toggle" data-toggle="panel-mobile"><span></span><span></span><span></span><span></span></a>
        </div>

        <div class="module module-logo">
            <a href="/">
                <img src="{{asset('frontend/assets/img/logo.jpg')}}" alt="">
            </a>
        </div>

        <a href="{{route('frontend.cart')}}" class="module module-cart" >
            <i class="ti ti-shopping-cart"></i>
            <span class="notification" id="cart-total-mobile">0</span>
        </a>

    </header>
    <!-- Header / End -->

    <!-- Content -->
    <div id="content">