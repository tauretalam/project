@extends('layouts.main')

@section('content')



<!-- caed start -->


<!-- tranding products -->


<!-- Flash sale start -->


<!-- Our Categories -->


<!-- Your Premier -->

<section class="bg-success bg-opacity-75 py-5">
    <div class="container">
        <div class="row align-items-center">
            <h2 class="fw-bold text-center my-5">
                GreenSathiCart
            </h2>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Products</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="{{ asset('images/01.jpg') }}" class="img-fluid rounded"
                            style="height:80px; width:80px; object-fit:cover;" alt="">
                            Shrubs
                        </td>
                        <td>02</td>
                        <td>$180.00</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <img src="{{ asset('images/01.jpg') }}" class="img-fluid rounded"
                            style="height:80px; width:80px; object-fit:cover;" alt="">
                            Shrubs
                        </td>
                        <td>01</td>
                        <td>$90.00</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>
                            <img src="{{ asset('images/01.jpg') }}" class="img-fluid rounded"
                            style="height:80px; width:80px; object-fit:cover;" alt="">
                            Shrubs
                        </td>
                        <td>03</td>
                        <td>$270.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <H3>Total Price</H3>
            <H3>$137.00</H3>
        </div>
    </div>
</section>

<!-- Popular Products -->
<div class="container text-center mt-5 mb-4">
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
</div>


<!-- what our coustomer say -->
<section class="bg-success bg-opacity-75 py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-6 mb-4">
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
            </div>

            <!-- Right Cards -->
            <div class="col-lg-6">

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