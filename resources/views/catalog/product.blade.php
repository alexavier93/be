@extends('layouts.app')

@section('title', '- Lorem ipsum dolor')

@section('content')

    <div id="product-page">

        <div class="container">

            <div class="content">

                <div class="row">

                    <div class="col-md-5">

                        <div class="banner-section clearfix">

                            <div class="banner-slider">

                                <div class="slider slider-for">
                                    <div class="slider-banner-image">
                                        <img src="{{ asset('storage/catalog/product.jpg') }}">
                                        <a data-fancybox="galeria" href="{{ asset('storage/catalog/product.jpg') }}"
                                            class="btn-product-gallery">
                                            <i class="fas fa-expand-arrows-alt"></i>
                                        </a>
                                    </div>
                                    <div class="slider-banner-image">
                                        <img src="{{ asset('storage/catalog/product-hover.jpg') }}">
                                        <a data-fancybox="galeria" href="{{ asset('storage/catalog/product-hover.jpg') }}"
                                            class="btn-product-gallery">
                                            <i class="fas fa-expand-arrows-alt"></i>
                                        </a>
                                    </div>
                                    <div class="slider-banner-image">
                                        <img src="{{ asset('storage/catalog/product.jpg') }}">
                                        <a data-fancybox="galeria" href="{{ asset('storage/catalog/product.jpg') }}"
                                            class="btn-product-gallery">
                                            <i class="fas fa-expand-arrows-alt"></i>
                                        </a>
                                    </div>
                                    <div class="slider-banner-image">
                                        <img src="{{ asset('storage/catalog/product-hover.jpg') }}">
                                        <a data-fancybox="galeria" href="{{ asset('storage/catalog/product-hover.jpg') }}"
                                            class="btn-product-gallery">
                                            <i class="fas fa-expand-arrows-alt"></i>
                                        </a>
                                    </div>
                                    <div class="slider-banner-image">
                                        <img src="{{ asset('storage/catalog/product.jpg') }}">
                                        <a data-fancybox="galeria" href="{{ asset('storage/catalog/product.jpg') }}"
                                            class="btn-product-gallery">
                                            <i class="fas fa-expand-arrows-alt"></i>
                                        </a>
                                    </div>
                                    <div class="slider-banner-image">
                                        <img src="{{ asset('storage/catalog/product-hover.jpg') }}">
                                        <a data-fancybox="galeria"
                                            href="{{ asset('storage/catalog/product-hover.jpg') }}"
                                            class="btn-product-gallery">
                                            <i class="fas fa-expand-arrows-alt"></i>
                                        </a>
                                    </div>

                                </div>

                                <div class="slider slider-nav thumb-image">
                                    <div class="thumbnail-image">
                                        <div class="thumbImg">
                                            <img src="{{ asset('storage/catalog/product.jpg') }}" />
                                        </div>
                                    </div>
                                    <div class="thumbnail-image">
                                        <div class="thumbImg">
                                            <img src="{{ asset('storage/catalog/product-hover.jpg') }}" />
                                        </div>

                                    </div>
                                    <div class="thumbnail-image">
                                        <div class="thumbImg">
                                            <img src="{{ asset('storage/catalog/product.jpg') }}" />
                                        </div>
                                    </div>
                                    <div class="thumbnail-image">
                                        <div class="thumbImg">
                                            <img src="{{ asset('storage/catalog/product-hover.jpg') }}" />
                                        </div>
                                    </div>
                                    <div class="thumbnail-image">
                                        <div class="thumbImg">
                                            <img src="{{ asset('storage/catalog/product.jpg') }}" />
                                        </div>
                                    </div>
                                    <div class="thumbnail-image">
                                        <div class="thumbImg">
                                            <img src="{{ asset('storage/catalog/product-hover.jpg') }}" />
                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>

                    </div>

                    <div class="col-md-7">

                        <div class="product-details">

                            <h1 class="product-title">Lorem ipsum dolor sit amet adipisicing</h1>

                            <div class="product-price">
                                <span class="new-price">R$ 10,99</span>
                                <span class="old-price">R$ $20,99</span>
                            </div>

                            <div class="product-description">
                                Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent
                                elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices
                                sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu,
                                dapibus eu,
                            </div>

                            <form action="" method="POST">

                                <div class="product-options">
                                    <label>Cor:</label>
                                    <div>
                                        <input type="radio" class="btn-check" name="colors" id="cor1">
                                        <label class="btn check-color" for="cor1" style="background: #ddd;"></label>

                                        <input type="radio" class="btn-check" name="colors" id="cor2">
                                        <label class="btn check-color" for="cor2" style="background: rgb(214, 45, 45);"></label>

                                        <input type="radio" class="btn-check" name="colors" id="cor3">
                                        <label class="btn check-color" for="cor3" style="background: rgb(12, 206, 29);"></label>
                                    </div>
                                </div>

                                <div class="product-options">
                                    <label>Tamanho:</label>
                                    <div>
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="1">P</option>
                                            <option value="2">M</option>
                                            <option value="3">G</option>
                                          </select>
                                    </div>
                                </div>

                                <div class="product-options">
                                    <label>Qtd:</label>
                                    <div>
                                        <div class="input-group mb-3 qtd">
                                            <button class="btn btn-outline-secondary" type="button"><i class="fas fa-minus"></i></button>
                                            <input type="text" class="form-control" value="1">
                                            <button class="btn btn-outline-secondary" type="button"><i class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-default btn-buy">Eu quero</button>

                            </form>

                            <div class="add-wishlist">
                                <a href=""><i class="far fa-heart"></i> Adicionar a Lista de Desejo</a>
                            </div>


                            

                        </div>

                    </div>

                </div>

            </div>



        </div>


    </div>

@endsection
