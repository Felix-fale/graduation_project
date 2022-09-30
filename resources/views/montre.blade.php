@extends('layouts.master')

@section('content')
    <!-- Start Banner Hero -->
    <header class="bg-success py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>
    </header>
    <!-- End Banner Hero -->

    <!-- Start Brands -->
    <section class="bg-light">
        <div class="container ">
            <div class="row  pt-3">
                <div class="col-lg-6 ">
                    <h1 class="h1">Nos categories</h1>
                </div>
                <div class="px-0">
                    <a class="nav-link" href="{{ url('/') }}">Accueil </a>
                </div>
                <div class="d-flex px-0 pb-0">
                    <a class="nav-link" href="{{ route('chaussure') }}">Chaussure </a>
                    <a class="nav-link " href="{{ route('montre') }}"> Montre</a>
                    <a class="nav-link" href="{{ route('sac') }}">Sac </a>
                    <a class="nav-link" href="{{ route('voiture') }}">Voiture </a>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="templatemo-slide-brand"
                                data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="{{ route('montre') }}"><img class="img-fluid brand-img"
                                                        src="assets/img/feature_prod_01.jpg" alt="Brand Logo">
                                                </a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="assets/img/brand_02.png" alt="Brand Logo">
                                                </a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="assets/img/brand_03.png" alt="Brand Logo">
                                                </a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="assets/img/brand_04.png" alt="Brand Logo">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="assets/img/brand_01.png" alt="Brand Logo">
                                                </a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="assets/img/brand_02.png" alt="Brand Logo">
                                                </a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="assets/img/brand_03.png" alt="Brand Logo">
                                                </a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img"
                                                        src="assets/img/brand_04.png" alt="Brand Logo">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#templatemo-slide-brand" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->



    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container ">

            <div class="row  pb-3">
                <div class="col-lg-6 ">
                    <h1 class="h1">Nos produits</h1>
                </div>
            </div>

            @foreach ($categories as $category)
            <a href="#" class="nav-link px-0">{{$category->name}} </a>
            @endforeach

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-left">

                @foreach ($category->products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <a href="shop-single.html">
                                <img src="{{ asset('images/' . $product->image) }}" height="200" class="card-img-top"
                                    alt="...">
                            </a>
                            <div class="card-body ">
                                <ul class="list-unstyled d-flex justify-content-between row row-cols- row-cols-md-2">
                                    <li>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                        <i class="text-warning fa fa-star"></i>
                                    </li>
                                    <li class="text-muted text-right">{{ $product->price }} Fcfa</li>
                                </ul>
                                <a href="shop-single.html"
                                    class="h2 text-decoration-none text-dark">{{ $product->name }}</a>
                                <p class="card-text ">
                                    {{ $product->description }}
                                </p>
                                <button type="submit"
                                    class="btn btn-success btn-forme m-auto d-flex justify-content-center">
                                    Contacter
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
@endsection
