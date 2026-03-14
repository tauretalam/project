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
        <p class="card-text  fs-6">ABOUT</p>
        <h3 class="card-title ">We are Passionate <br> About Our Work</h3>


        <!-- <button type="button" class="btn btn-none mt-4"
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
</div>
<div class="row row-cols-1 row-cols-md-4 g-4 mx-5">
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

<section class=" py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Image -->
            <div class="col-lg-6 col-md-12 mb-4">
                <img src="{{ asset('images/01.jpg') }}" class="img-fluid rounded" alt=""
                    style="height:600px; object-fit:cover;">
            </div>

            <!-- Content -->
            <div class="col-lg-6 col-md-12">
                <h2 class="fw-bold">
                    We strive to provide <br> our customers with <br> the highest quality
                </h2>

                <p class="fs-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eos, omnis ab? Aut consectetur eligendi quasi repellat, id,
                    necessitatibus rerum reprehenderit laudantium natus quisquam
                    optio neque inventore ipsam odit.
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eos, omnis ab? Aut consectetur eligendi quasi repellat, id,
                    necessitatibus rerum reprehenderit laudantium natus quisquam
                    optio neque inventore ipsam odit.
                </p>

                <hr>

                <!-- Stats -->
                <div class="row text-center">

                    <p><i>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt sunt perspiciatis dolorem
                            tempora voluptate itaque odit. Vitae libero sed hic vel eveniet tempora nisi, maxime odit
                            necessitatibus aut cumque officiis quisquam tempore nostrum. Odit esse cupiditate voluptatum
                            quos quis totam!</i></p>

                </div>

            </div>

        </div>
    </div>
</section>

<!-- Popular Products -->
<!-- <div class="container text-center mt-5 mb-4">
    <div class="row">
        <h1>Popular Products</h1>
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
</div> -->


<!-- what our coustomer say -->
<section class="bg-success bg-opacity-75 py-5">
    <div class="container">
        <div class="row align-items-center">
            <h2 class="fw-bold text-center">Our Core Values That <br>Drive Everything We do</h2>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100" style="background-color: transparent; border: none;">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h4 class="card-title">Passionate About Work</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>

                    </div>
                </div>

                <div class="col">
                    <div class="card h-100" style="background-color: transparent; border: none;">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h4 class="card-title">Creative Team Members</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>

                    </div>
                </div>

                <div class="col">
                    <div class="card h-100" style="background-color: transparent; border: none;">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h4 class="card-title">Innovation Solution</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100" style="background-color: transparent; border: none;">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h4 class="card-title">Qualitiful Products</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>

                    </div>
                </div>

                <div class="col">
                    <div class="card h-100" style="background-color: transparent; border: none;">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h4 class="card-title">Customer Satisfaction</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>

                    </div>
                </div>

                <div class="col">
                    <div class="card h-100" style="background-color: transparent; border: none;">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h4 class="card-title">Simplicity Interface</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- our mission -->

<section class=" py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Content -->
            <div class="col-lg-6 col-md-12">
                <h2 class="fw-bold">
                    Our Mission
                </h2>

                <p class="fs-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eos, omnis ab? Aut consectetur eligendi quasi repellat, id,
                    necessitatibus rerum reprehenderit laudantium natus quisquam
                    optio neque inventore ipsam odit.


                </p>

                <ul style="list-style-type: none; padding-left: 0; margin: 0;">
                    <li><i class="fa-solid fa-circle-check" style="color: rgb(14, 201, 40);"></i> Quality and Variety
                    </li>
                    <li><i class="fa-solid fa-circle-check" style="color: rgb(14, 201, 40);"></i> Sustainable Practices
                    </li>
                    <li><i class="fa-solid fa-circle-check" style="color: rgb(14, 201, 40);"></i> Expert Guidance</li>
                    <li><i class="fa-solid fa-circle-check" style="color: rgb(14, 201, 40);"></i> Experienced Team</li>
                </ul>

                <!-- Stats -->
                <div class="row text-center">



                </div>

            </div>

            <!-- Image -->
            <div class="col-lg-6 col-md-12 mb-4">
                <img src="{{ asset('images/01.jpg') }}" class="img-fluid rounded" alt=""
                    style="height:600px; object-fit:cover;">
            </div>





        </div>
    </div>
</section>

<!-- ready to find your perfect plant -->
<div class="card text-bg-dark border-0 mt-5">
    <img src="{{ asset('images/02.jpg') }}" class="card-img" alt="...">
    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center text-center">
        <h3 class="card-title ">Ready to Find your Perfect Plane?</h3>
        <p class="card-text  fs-6">Browse our online store or visit us inperson to <br> exprience the beauty of nature.
        </p>

        <button type="button" class="btn btn-none mt-4"
            style="border:2px solid green;--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
            Shop Now
        </button>
    </div>
</div>


@endsection