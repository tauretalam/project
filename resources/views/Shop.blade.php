@extends('layouts.main')

@section('content')

<!-- <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{ asset('images/01.jpg') }}" class="d-block w-100" alt="Plant Image">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="{{ asset('images/02.jpg') }}" class="d-block w-100" alt="Plant Image">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/03.jpg') }}" class="d-block w-100" alt="Plant Image">
        </div>
    </div>

    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
        <p class="card-text  fs-6">WELCOME TO GreenSathi</p>
        <h3 class="card-title ">Discover the Beauty of Nature at Your Fingertips</h3>
        <button type="button" class="btn btn-success mt-4"
            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            Shop Now
        </button>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> -->

<!-- caed start -->
<!-- <div class="row row-cols-1 row-cols-md-4 g-4 mt-5 mx-5 text-center">
    <div class="col">
        <div class="card h-100 border-0">

            <div class="card-body">
                <i class="fa-brands fa-cc-mastercard fa-xl" style="color: rgb(1, 0, 7);"></i>
                <h5 class="card-title">Secure Payment</h5>
                <p class="card-text">Elementum feugiat diam</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100 border-0">

            <div class="card-body">
                <i class="fa-solid fa-truck-fast fa-xl" style="color: rgb(1, 0, 7);"></i>
                <h5 class="card-title">Free Shipping</h5>
                <p class="card-text">For $100 order</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100 border-0">

            <div class="card-body">
                <i class="fa-solid fa-people-carry-box fa-xl" style="color: rgb(1, 0, 7);"></i>
                <h5 class="card-title">Delivered with Care</h5>
                <p class="card-text">Lacinia pellentesque leo</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100 border-0">

            <div class="card-body">
                <div><i class="fa-regular fa-heart fa-xl " style="color: rgb(1, 0, 7);"></i></div>
                <h5 class="card-title">Execellent Service</h5>
                <p class="card-text">Blandit gravida viverra</p>
            </div>

        </div>
    </div>
</div>
<hr class="mx-5 mt-"> -->

<!-- tranding products -->
<!-- <div class="container text-center mt-5 mb-4">
    <div class="row">
        <h1>Trending Products</h1>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4 mx-5">
    <div class="col">
        <div class="card h-100">
            <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title">Jasmine</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>

    <div class="col">
        <div class="card h-100">
            <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title">Shrubs</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title">Money Plant</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title">Snake Plant</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
</div> -->

<!-- Flash sale start -->
<div class="card text-bg-dark border-0 mt-5">
    <img src="{{ asset('images/02.jpg') }}" class="card-img" alt="...">
    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
        <h3 class="card-title ">Shop</h3>
        <!-- <p class="card-text  fs-6">Don`t miss out on our flash sale event! For a limited time, enjoy up to 50% <br> off
            on a
            selection of our best-selling products.</p>

        <button type="button" class="btn btn-none mt-4"
            style="border:2px solid green;--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            Shop Now
        </button> -->
    </div>
</div>

<!-- Our Categories -->
<!-- <div class="container text-center mt-5 mb-4">
    <div class="row">
        <h1>Our Categories</h1>
    </div>
</div> -->
<!-- <div class="row row-cols-1 row-cols-md-4 g-4 mx-5">
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset('images/01.jpg') }}" class="card-img-top " style="hight: 300px;" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Jasmine</h5>

            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset('images/01.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Shrubs</h5>

            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset('images/01.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Money Plant</h5>

            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset('images/01.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">Snake Plant</h5>

            </div>

        </div>
    </div>
</div> -->

<!-- Your Premier -->

<!-- <section class="bg-success bg-opacity-75 py-5">
    <div class="container">
        <div class="row align-items-center"> -->

            <!-- Image -->
            <!-- <div class="col-lg-6 col-md-12 mb-4">
                <img src="{{ asset('images/01.jpg') }}" class="img-fluid rounded" alt="">
            </div> -->

            <!-- Content -->
            <!-- <div class="col-lg-6 col-md-12">
                <h2 class="fw-bold">
                    Your Premier <br> Destination for All <br> Green
                </h2>

                <p class="fs-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Eos, omnis ab? Aut consectetur eligendi quasi repellat, id, 
                    necessitatibus rerum reprehenderit laudantium natus quisquam 
                    optio neque inventore ipsam odit.
                </p>

                <hr> -->

                <!-- Stats -->
                <!-- <div class="row text-center">

                    <div class="col-6 col-md-4">
                        <h2>99%</h2>
                        <p class="fs-6">Customer Satisfaction</p>
                    </div>

                    <div class="col-6 col-md-4">
                        <h2>123K</h2>
                        <p class="fs-6">Plant Sold</p>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section> -->

<!-- Popular Products -->
<div class="container text-center mt-5 mb-4">
    <div class="row">
        <!-- <h1>Popular Products</h1> -->
    </div>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4 mx-5">
    <div class="col">
        <div class="card h-100">
             <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/ProductDetails') }}" style="text-decoration: none;">Jasmine</a></h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/ProductDetails') }}" style="text-decoration: none;">Jasmine</a></h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/ProductDetails') }}" style="text-decoration: none;">Jasmine</a></h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
             <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/ProductDetails') }}" style="text-decoration: none;">Jasmine</a></h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4 mx-5">
    <div class="col">
        <div class="card h-100">
             <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/ProductDetails') }}" style="text-decoration: none;">Jasmine</a></h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
             <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/ProductDetails') }}" style="text-decoration: none;">Jasmine</a></h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
             <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/ProductDetails') }}" style="text-decoration: none;">Jasmine</a></h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title"><a href="{{ url('/ProductDetails') }}" style="text-decoration: none;">Jasmine</a></h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4 mx-5">
    <div class="col">
        <div class="card h-100">
            <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title">Jasmine</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title">Shrubs</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
             <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title">Money Plant</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title">Snake Plant</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4 mx-5">
    <div class="col">
        <div class="card h-100">
            <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title">Jasmine</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
             <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title">Shrubs</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
             <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title">Money Plant</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <a href="{{ url('/ProductDetails') }}"><img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h5 class="card-title">Snake Plant</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4 mx-5">
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Jasmine</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Shrubs</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Money Plant</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Snake Plant</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-4 g-4 mx-5">
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Jasmine</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Shrubs</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Money Plant</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
    <div class="col">
        <div class="card h-100  ">
            <img src="{{ asset('images/03.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Snake Plant</h5>
                <p class="card-text">Indoor Plant</p>
                <p class="card-text">Price $95.00</p>
            </div>

        </div>
    </div>
</div>


<!-- what our coustomer say -->
<!-- <section class="bg-success bg-opacity-75 py-5">
    <div class="container">
        <div class="row align-items-center"> -->

            <!-- Left Content -->
            <!-- <div class="col-lg-6 mb-4">
                <h2 class="fw-bold">What Our Customer Say</h2>
                <p>
                    Discover the reasons why people loves us and become your 
                    go-to partner.
                </p>

                <div class="card shadow">
                    <div class="card-body">
                        <p class="card-text">
                            “I recently purchased a few indoor plants from GreenSathi, 
                            and I am beyond satisfied! 🌱 The plants arrived in perfect 
                            condition, fresh and healthy.”
                        </p>

                        <img src="{{ asset('images/03.jpg') }}"
                             style="width:60px; height:60px; border:2px solid #333; border-radius:50%; object-fit:cover;"
                             alt="">
                    </div>
                </div>
            </div> -->

            <!-- Right Cards -->
            <!-- <div class="col-lg-6">

                <div class="card shadow mb-3">
                    <div class="card-body">
                        <p class="card-text">
                            “I recently purchased a few indoor plants from GreenSathi, 
                            and I am beyond satisfied! 🌱 The plants arrived in perfect 
                            condition, fresh and healthy.”
                        </p>

                        <img src="{{ asset('images/03.jpg') }}"
                             style="width:60px; height:60px; border:2px solid #333; border-radius:50%; object-fit:cover;"
                             alt="">
                    </div>
                </div>

                <div class="card shadow">
                    <div class="card-body">
                        <p class="card-text">
                            “I recently purchased a few indoor plants from GreenSathi, 
                            and I am beyond satisfied! 🌱 The plants arrived in perfect 
                            condition, fresh and healthy.”
                        </p>

                        <img src="{{ asset('images/03.jpg') }}"
                             style="width:60px; height:60px; border:2px solid #333; border-radius:50%; object-fit:cover;"
                             alt="">
                    </div>
                </div>

            </div>

        </div>
    </div>
</section> -->

<!-- ready to find your perfect plant -->
<div class="card text-bg-dark border-0 mt-5">
    <img src="{{ asset('images/02.jpg') }}" class="card-img" alt="...">
    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
        <h3 class="card-title ">Ready to Find your  Perfect Plane?</h3>
        <p class="card-text  fs-6">Browse our online store or visit us inperson to <br> exprience the beauty of nature.</p>

        <button type="button" class="btn btn-none mt-4"
            style="border:2px solid green;--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            Shop Now
        </button>
    </div>
</div>


@endsection