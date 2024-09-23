@extends('userbase')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Sign Up</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Sign Up</li>
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
            <h6 class="text-primary text-uppercase">|&nbsp;&nbsp;Sign Up</h6>
            <h1 class="mb-5">Join Us Today !</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                <img class="position-relative rounded w-100 h-100" src="img/carousel-bg-1.jpg" frameborder="0"
                    style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
            </div>
            <div class="col-md-6">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <p class="mb-4">Join us today! Create your account to unlock exclusive benefits, personalized
                        services, and stay connected with our community.</p>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Full Name"
                                        name="name" value="{{ old('name') }}" required>
                                    <label for="name">Full Name</label>
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Email Address"
                                        name="email" value="{{ old('email') }}" required>
                                    <label for="email">Email Address</label>
                                    
                                </div>
                            </div>
                           
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="phone" placeholder="Phone Number"
                                        name="phone" value="{{ old('phone') }}">
                                    <label for="phone">Phone Number</label>
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="address" placeholder="Address"
                                        name="address" value="{{ old('address') }}">
                                    <label for="address">Address</label>
                                    
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="Password"
                                        name="password" required>
                                    <label for="password">Password</label>
                                    
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password_confirmation"
                                        placeholder="Confirm Password" name="password_confirmation" required>
                                    <label for="password_confirmation">Confirm Password</label>
                                    
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Sign Up</button>
                            </div>
                        </div>
                    </form>
                    <p class="mb-4">Already have an account? <a href="{{ route('login') }}">Sign In</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
