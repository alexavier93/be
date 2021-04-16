@extends('layouts.app')

@section('title', '- Categoria 01')

@section('content')

    <div id="categories">

        <div class="container">

            <div class="content">

                <div class="row">

                    <div class="col-md-12 mb-3">

                        <nav class="breadcrumb-page" aria-label="breadcrumb">

                            <h5>Categorias</h5>

                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Categoria 01</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="col-md-3">

                        <div class="menu-aside">

                            <div class="card mb-4 menu-categories">
                                <div class="card-header">
                                    Categorias
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><a href="">Categorias 01</a></li>
                                        <li class="list-group-item"><a href="">Categorias 02</a></li>
                                        <li class="list-group-item"><a href="">Categorias 03</a></li>
                                        <li class="list-group-item"><a href="">Categorias 04</a></li>
                                        <li class="list-group-item"><a href="">Categorias 05</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="card price-filter">
                                <div class="card-header">
                                    Preço
                                </div>
                                <div class="card-body">
                                    <form class="row g-3">

                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Valor Min:">
                                            <input type="text" class="form-control" placeholder="Valor Max:">
                                        </div>

                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Aplicar filtro</button>
                                          </div>
                                    </form>
                                </div>
                            </div>



                        </div>

                    </div>

                    <div class="col-md-9">

                        <div class="products">

                            <div class="row">

                                <div class="col-md-12 filters">

                                    <div class="d-flex justify-content-end">

                                        <select class="form-select form-select-sm select-order">
                                            <option value="">Ordenar por:</option>
                                            <option value="1">Maior Preço</option>
                                            <option value="2">Menor Preço</option>
                                            <option value="3">Nome [A-Z]</option>
                                            <option value="3">Nome [Z-A]</option>
                                        </select>


                                    </div>



                                </div>

                                <div class="col-md-6 col-lg-4 mb-5 mt-3">
                                    <div class="product">
                                        <a href="">
                                            <img class="product-img" src="{{ asset('storage/catalog/product.jpg') }}"
                                                alt="">
                                            <img class="product-img-hover"
                                                src="{{ asset('storage/catalog/product-hover.jpg') }}" alt="">
                                        </a>
                                        <div class="product-info">
                                            <a href="">
                                                <h2 class="product-title">Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit</h2>
                                                <div class="product-price">
                                                    <span class="new-price">R$ 10,99</span>
                                                    <span class="old-price">R$ $20,99</span>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-4 mb-5 mt-3">
                                    <div class="product">
                                        <a href="">
                                            <img class="product-img" src="{{ asset('storage/catalog/product.jpg') }}"
                                                alt="">
                                            <img class="product-img-hover"
                                                src="{{ asset('storage/catalog/product-hover.jpg') }}" alt="">
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

                                <div class="col-md-6 col-lg-4 mb-5 mt-3">
                                    <div class="product">
                                        <a href="">
                                            <img class="product-img" src="{{ asset('storage/catalog/product.jpg') }}"
                                                alt="">
                                            <img class="product-img-hover"
                                                src="{{ asset('storage/catalog/product-hover.jpg') }}" alt="">
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

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
