@extends('userbase')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase">|&nbsp;&nbsp;Our Services</h6>
            <h1 class="mb-5">The Best Service In Town</h1>
        </div>
        <div class="row g-4">
            @foreach ($service as $services)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img style="height: 300px; width: 500px;" class="img-fluid" src="service/{{$services->image}}" alt="">
                                <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                    <a style="width: 100px; height: 100px;" class="btn btn-square mx-1" href="{{ url('service_details', $services->id)}}"><i class="fa fa-info"></i></a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="fw-bold mb-0">{{$services->name}}</h5>
                                <small>{!! Str::limit($services->description, 20) !!} </small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            
    </div>
</div>

<!-- Team End -->


@endsection