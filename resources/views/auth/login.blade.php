@extends('userbase')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Sign In</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Sign In</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">|&nbsp;&nbsp;Sign In</h6>
            <h1 class="mb-5">Welcome Back !</h1>
        </div>
        <div class="row g-4">

            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <img class="position-relative rounded w-100 h-100" src="img/carousel-bg-1.jpg" frameborder="0"
                    style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></>
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <p class="mb-4">Sign in to your account to access personalized services, manage bookings, and stay
                        connected with us.</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email Address"
                                        name="email">
                                    <label for="email">Email Address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="Password"
                                        name="password">
                                    <label for="password">Password</label>
                                </div>
                            </div>

                            <div class="col-12">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                                <button class="btn btn-primary w-100 py-3" type="submit">Sign In</button>
                            </div>
                        </div>
                    </form>
                    <p class="mb-4">Already have an account? <a href="{{ route('register') }}">Sign Up</a></p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection