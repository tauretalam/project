<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>Home-page</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light ">
        <div class="container-fluid color-light">
            <a class="navbar-brand fs-4" href="#"><i class="fa-solid fa-seedling" style="color: rgb(29, 123, 24);"></i>
                Green<span>Sathi</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex ms-auto" role="search">
                    <div class="input-group">
                        <input class="form-control form-control-sm " style="width: 250px;" type="search"
                            placeholder="What are you looking for?" aria-label="Search" />
                        <button class="btn btn-outline-success btn-sm" type="submit"><i
                                class="fa-solid fa-magnifying-glass" style="color: rgb(24, 18, 61);"></i></button>
                    </div>
                </form>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">


                    <li class="nav-item">
                        <a class="nav-link text-primary" href="#">Become a Saller</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success btn-sm mx-2 my-2" href="/Login/SignUp/Cart"><i class="fa-solid fa-cart-arrow-down"
                                style="color: rgb(245, 247, 250);"></i> Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger btn-sm mx-2 my-2" href="/Login"><i class="fa-solid fa-user"
                                style="color: rgb(248, 250, 252);"></i> Login</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!--Nave catagoury -->
    <nav class="navbar navbar-expand-lg bg-success bg-opacity-75 ">
        <div class="container-fluid ">

            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="nav ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Indoor Plants
                        </a>
                        <ul class="dropdown-menu ">
                            <li><a class="dropdown-item" href="#">Snake Plant</a></li>
                            <li><a class="dropdown-item" href="#">Money Plant</a></li>
                            <li><a class="dropdown-item" href="#">Peace Lily</a></li>
                            <li><a class="dropdown-item" href="#">ZZ Plant</a></li>
                            <li><a class="dropdown-item" href="#">Areca Palm</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Outdoor Plants
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Flowering plants</a></li>
                            <li><a class="dropdown-item" href="#">Shrubs</a></li>
                            <li><a class="dropdown-item" href="#">Climbers</a></li>
                            <li><a class="dropdown-item" href="#">Trees</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Flowering Plants
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Rose</a></li>
                            <li><a class="dropdown-item" href="#">Hibiscus</a></li>
                            <li><a class="dropdown-item" href="#">Jasmine</a></li>
                            <li><a class="dropdown-item" href="#">Bougainvillea</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Seeds
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Flower seeds</a></li>
                            <li><a class="dropdown-item" href="#">Vegetable seeds</a></li>
                            <li><a class="dropdown-item" href="#">Herb seeds</a></li>
                            <li><a class="dropdown-item" href="#">Fruit seeds</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Fertilizers & Soil
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Organic fertilizer</a></li>
                            <li><a class="dropdown-item" href="#">Compost</a></li>
                            <li><a class="dropdown-item" href="#">Potting mix</a></li>
                            <li><a class="dropdown-item" href="#">Vermicompost</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Garden Tools
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Watering can</a></li>
                            <li><a class="dropdown-item" href="#">Pruners</a></li>
                            <li><a class="dropdown-item" href="#">Gardening gloves</a></li>
                            <li><a class="dropdown-item" href="#">Soil mix</a></li>
                        </ul>
                    </li>
                    
                </div>
            </div>
        </div>
    </nav>