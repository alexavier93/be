@extends('layouts.app')

@section('title', 'Vista Sua Paixão')

@section('content')

    <!-- Home -->
    <div id="home">

        <!-- Slide Section -->
        <section class="banner-section">

            <div class="slide-home owl-carousel owl-theme">
                <!-- Slide Item -->
                <div class="slide-item"><img class="img-fluid" src="{{ asset('assets/images/banner-01.png') }}" alt="">
                </div>
            </div>

        </section>

        <!-- Banner Section -->
        <section class="banner-home my-5">

            <div class="container">

                <div class="row">

                    <div class="col-md-4">
                        <div class="banner">
                            <a href="">
                                <img class="img-fluid" src="{{ asset('storage/banners/banner-01.jpg') }}" alt="">
                            </a>
                            <div class="banner-content">
                                <h2>Lorem Ipsum</h2>
                                <p>Lorem ipsum dolor sit magma pumpo pellentesque</p>
                                <a href="" class="btn btn-default">Saiba mais</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="banner">
                            <a href="">
                                <img class="img-fluid" src="{{ asset('storage/banners/banner-01.jpg') }}" alt="">
                            </a>
                            <div class="banner-content">
                                <h2>Lorem Ipsum</h2>
                                <p>Lorem ipsum dolor sit magma pumpo pellentesque</p>
                                <a href="" class="btn btn-default">Saiba mais</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="banner">
                            <a href="">
                                <img class="img-fluid" src="{{ asset('storage/banners/banner-01.jpg') }}" alt="">
                            </a>
                            <div class="banner-content">
                                <h2>Lorem Ipsum</h2>
                                <p>Lorem ipsum dolor sit magma pumpo pellentesque</p>
                                <a href="" class="btn btn-default">Saiba mais</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <div class="divider">
            <div class="content">
                <span class="segoe">vista sua paixão</span>
            </div>
        </div>

        <section class="products-home">

            <div class="container">

                <div class="row">
                    <div class="col-md-4 col-lg-3 my-4">
                        <div class="product">
                            <a href="">
                                <img class="product-img" src="{{ asset('storage/catalog/product.jpg') }}" alt="">
                                <img class="product-img-hover" src="{{ asset('storage/catalog/product-hover.jpg') }}" alt="">
                            </a>
                            <div class="product-info">
                                <a href="">
                                    <h2 class="product-title">Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>
                                    <div class="product-price">
                                        <span class="new-price">R$ 10,99</span>
                                        <span class="old-price">R$ $20,99</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 my-4">
                        <div class="product">
                            <a href="">
                                <img class="product-img" src="{{ asset('storage/catalog/product.jpg') }}" alt="">
                                <img class="product-img-hover" src="{{ asset('storage/catalog/product-hover.jpg') }}" alt="">
                            </a>
                            <div class="product-info">
                                <a href="">
                                    <h2 class="product-title">Lorem ipsum dolor sit amet adipisicing</h2>
                                    <div class="product-price">
                                        <span class="price">R$ 15,99</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 my-4">
                        <div class="product">
                            <a href="">
                                <img class="product-img" src="{{ asset('storage/catalog/product.jpg') }}" alt="">
                                <img class="product-img-hover" src="{{ asset('storage/catalog/product-hover.jpg') }}" alt="">
                            </a>
                            <div class="product-info">
                                <a href="">
                                    <h2 class="product-title">Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>
                                    <div class="product-price">
                                        <span class="new-price">R$ 10,99</span>
                                        <span class="old-price">R$ $20,99</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 my-4">
                        <div class="product">
                            <a href="">
                                <img class="product-img" src="{{ asset('storage/catalog/product.jpg') }}" alt="">
                                <img class="product-img-hover" src="{{ asset('storage/catalog/product-hover.jpg') }}" alt="">
                            </a>
                            <div class="product-info">
                                <a href="">
                                    <h2 class="product-title">Lorem ipsum dolor sit amet adipisicing</h2>
                                    <div class="product-price">
                                        <span class="price">R$ 15,99</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 my-4">
                        <div class="product">
                            <a href="">
                                <img class="product-img" src="{{ asset('storage/catalog/product.jpg') }}" alt="">
                                <img class="product-img-hover" src="{{ asset('storage/catalog/product-hover.jpg') }}" alt="">
                            </a>
                            <div class="product-info">
                                <a href="">
                                    <h2 class="product-title">Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>
                                    <div class="product-price">
                                        <span class="new-price">R$ 10,99</span>
                                        <span class="old-price">R$ $20,99</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 my-4">
                        <div class="product">
                            <a href="">
                                <img class="product-img" src="{{ asset('storage/catalog/product.jpg') }}" alt="">
                                <img class="product-img-hover" src="{{ asset('storage/catalog/product-hover.jpg') }}" alt="">
                            </a>
                            <div class="product-info">
                                <a href="">
                                    <h2 class="product-title">Lorem ipsum dolor sit amet adipisicing</h2>
                                    <div class="product-price">
                                        <span class="price">R$ 15,99</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 my-4">
                        <div class="product">
                            <a href="">
                                <img class="product-img" src="{{ asset('storage/catalog/product.jpg') }}" alt="">
                                <img class="product-img-hover" src="{{ asset('storage/catalog/product-hover.jpg') }}" alt="">
                            </a>
                            <div class="product-info">
                                <a href="">
                                    <h2 class="product-title">Lorem ipsum dolor sit amet consectetur adipisicing elit</h2>
                                    <div class="product-price">
                                        <span class="new-price">R$ 10,99</span>
                                        <span class="old-price">R$ $20,99</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 my-4">
                        <div class="product">
                            <a href="">
                                <img class="product-img" src="{{ asset('storage/catalog/product.jpg') }}" alt="">
                                <img class="product-img-hover" src="{{ asset('storage/catalog/product-hover.jpg') }}" alt="">
                            </a>
                            <div class="product-info">
                                <a href="">
                                    <h2 class="product-title">Lorem ipsum dolor sit amet adipisicing</h2>
                                    <div class="product-price">
                                        <span class="price">R$ 15,99</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>



            </div>


        </section>

    </div>
    <!-- End Home -->

@endsection
