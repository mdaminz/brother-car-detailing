@extends('userbase')

@section('head')
<!-- Add these in your <head> section or at the end of your body section -->
<!-- Include FontAwesome for star icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">




<!-- Custom CSS for star rating -->
<style>
    .star-rating {
        direction: rtl;
        display: inline-block;
        padding: 20px;
    }

    .star-rating input[type="radio"] {
        display: none;
    }

    .star-rating label {
        color: #bbb;
        font-size: 24px;
        padding: 0;
        cursor: pointer;
        transition: all 0.3s ease-in-out;
    }

    .star-rating label:hover,
    .star-rating label:hover~label,
    .star-rating input[type="radio"]:checked~label {
        color: #f2b600;
    }
</style>


@endsection

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Leave a Review</h1>
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

<!-- Review Form Start -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header text-white">
                    <h3 class="card-title mb-0">Leave a Review</h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3 text-center">
                            <div class="star-rating">
                                <input type="radio" id="star5" name="rating" value="5" required /><label for="star5"
                                    title="5 stars"><i class="fas fa-star"></i></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label for="star4"
                                    title="4 stars"><i class="fas fa-star"></i></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label for="star3"
                                    title="3 stars"><i class="fas fa-star"></i></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label for="star2"
                                    title="2 stars"><i class="fas fa-star"></i></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label for="star1"
                                    title="1 star"><i class="fas fa-star"></i></label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="review" class="form-label">Review</label>
                            <textarea name="review" id="review" rows="5" class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Review Form End -->

@endsection