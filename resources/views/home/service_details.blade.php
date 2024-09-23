@extends('userbase')

<base href="/public">

<style>
    .span {
        text-align: center;
        position: relative;
    }

    span {
        display: inline-block;
    }

    span:before,
    span:after {
        border-top: 1px solid black;
        display: block;
        height: 1px;
        content: " ";
        width: 45%;
        position: absolute;
        left: 0;
        top: 1.0em;
    }

    span:after {
        right: 0;
        left: auto;
    }

    .success-msg,
    {
    margin: 10px 0;
    padding: 10px;
    border-radius: 3px 3px 3px 3px;
    }

    .success-msg {
        color: #270;
        background-color: #DFF2BF;
    }
</style>

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Service</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="">
    <div class="">

        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">|&nbsp;&nbsp; Our Service</h6>
            <h1 class="mb-5">The Best Service In Town</h1>
        </div>

        <div class="row g-4" style="margin: 0; padding-left: 200px;">
            <div class="col-md-3" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="service/{{$service->image}}"
                        style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-md-3">
                <h3 class="mb-3">{{$service->name}}</h3>
                <p class="mb-4">{{$service->description}}</p>
                <p><i class="fa fa-check text-success me-3"></i>RM {{$service->price}}</p>
                <p><i class="fa fa-check text-success me-3"></i>{{$service->duration}}</p>
            </div>

            <div class="col-md-4" style="border: 1px solid black;">
                <div class="wow fadeInUp" data-wow-delay="0.2s">
                    <p class="mb-2">Feel free to contact us to book a slot for our exceptional car wash and detailing
                        services. Our knowledgeable team is here to provide expert guidance and customized solutions to
                        meet your vehicle care needs.</p><br>
                    @if(session()->has('message'))
                        <div class="success-msg mb-3">
                            <i class="fa fa-check"></i>
                            Slot Booked Successfully
                        </div>
                    @endif
                    <form action="{{ url('add_booking', $service->id) }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Your Full Name" name="name"
                                        required>
                                    <label>Full Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" placeholder="Your Email Address"
                                        name="email" required>
                                    <label>Email Address</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="number" class="form-control" placeholder="Your Phone Number"
                                        name="phone" required>
                                    <label>Phone Number</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Your Car Model"
                                        name="car_model" required>
                                    <label>Car Model</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" placeholder="Your License Plate"
                                        name="license_plate" required>
                                    <label>License Plate</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" name="booking_date" id="booking-date"
                                        required>
                                    <label>Booking Date</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select style="background-color: white;" class="form-control" name="time_slot">
                                        <option value="10:00 am">10:00 am</option>
                                        <option value="11:00 am">11:00 am</option>
                                        <option value="12:00 pm">12:00 pm</option>
                                        <option value="1:00 pm">1:00 pm</option>
                                        <option value="3:00 pm">10:00 pm</option>
                                        <option value="4:00 pm">4:00 pm</option>
                                        <option value="5:00 pm">5:00 pm</option>
                                        <option value="6:00 pm">6:00 pm</option>
                                    </select>
                                    <label>Time Slot</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="action">Book
                                    Slot</button>
                            </div>
                            <!-- <div class="col-12">
                                <div class="span"><span>or</span></div>
                            </div>
                            <div class="col-12">
                                <a href="{{url('stripe', $service->id)}}" class="btn btn-primary w-100 py-3">Pay Now RM {{$service->price}}</a>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection