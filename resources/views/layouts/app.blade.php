<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('/assets/images/favicon.ico') }} ">

    <title>Be @yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Header -->
    <header id="header">

        <div class="header-top">

            <div class="top">
                <p>FRETE GRÁTIS PARA COMPRAS ACIMA DE R$ 250,00</p>
            </div>

            <div class="container">

                <div class="bottom">

                    <div class="header-left">
                        <ul class="top-menu top-link-menu d-none d-md-block">
                            <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>

                    <div class="header-right">
                        <ul class="top-menu top-link-menu d-none d-md-block">
                            <li><a href="#" class="me-4"><i class="far fa-comment"></i> Fale Conosco</a></li>
                            <li><a href="#"><i class="fab fa-whatsapp"></i> Whatsapp</a></li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>


        <div class="container">

            <div class="header-middle">

                <div class="header-left">

                    <form class="form-search" action="">

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="o que procura hoje?">
                            <button class="btn btn-outline-default" type="button"><i class="fas fa-search"></i></button>
                        </div>

                    </form>

                </div>

                <div class="header-center">
                    <a href="index.html" class="logo">
                        <img src="{{ asset('assets/images/logo-be.png') }}" alt="Be">
                    </a>
                </div>

                <div class="header-right">
                    <a href="" class="login">Vem fazer seu login :)</a>

                    <a href="" class="bag">0</a>
                </div>

            </div>

        </div>

        <div class="header-bottom">

            <nav class="navbar navbar-expand-lg">

                <div class="container">

                    <div class="container-fluid">

                        <div class="text-center">

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
                            </button>

                        </div>

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lançamentos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Coleções</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Acessórios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Quem Somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Be Social</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>




            </nav>

        </div>





    </header>
    <!-- Header -->

    <main role="main">
        @yield('content')
    </main>

    
    <!-- Footer -->
    <footer id="footer">

        <div class="divider">
            <div class="content">
                <span><img src="{{ asset('assets/images/img-divider.png') }}" alt=""></span>
            </div>
        </div>

        <div class="footer-top">

            <div class="container">

                <div class="row">

                    <div class="col-md-4 d-flex justify-content-center item">
                        <div>
                            <h2>Institucional</h2>
                            <ul>
                                <li><a href="">Quem Somos</a></li>
                                <li><a href="">Fale Conosco</a></li>
                                <li><a href="">Trocas e Devoluções</a></li>
                                <li><a href="">Cuide da sua Be</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex justify-content-center item">
                        <div class="text-center">
                            <h2>Canais de Venda</h2>

                            <p>Loja online 24h todos os dias.</p>
                            <p>Vendas whatsapp: Segunda a Sexta das 10h às 18h</p>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex justify-content-center item">
                        <div class="text-center">
                            <h2>Pagamentos</h2>
                            <p class="mb-3">Cartão de Crédito em até 3x sem juros</p>
                            <img class="img-fluid" src="{{ asset('assets/images/payment-logos.png') }}"
                                alt="Pagamentos">
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="divider">
            <div class="content">
                <span>@bevistasuapaixao</span>
            </div>
        </div>


        <div class="footer-bottom">

            <div class="container">

                <div class="row">




                    <div class="col-md-6 d-flex justify-content-center">

                        <div class="text-center info">

                            <div class="tel"><i class="fas fa-phone-alt"></i> 11 9999-9999</div>

                            <a href="" class="fale-conosco btn">Fale Conosco</a>

                            <div class="rede-sociais">

                                <h5>Nossas redes sociais</h5>

                                <ul>
                                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                                    <li><a href=""><i class="fab fa-whatsapp"></i></a></li>
                                </ul>

                            </div>


                        </div>

                    </div>

                    <div class="col-md-6 d-flex justify-content-center">

                        <div class="text-center newsletter">

                            

                            <form action="">
                                <h5>Cadastre seu e-mail para receber nossas novidades e promoções</h5>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="" placeholder="digite seu e-mail aqui">
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-default btn-block">Cadastrar</button>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>

            </div>


        </div>

        <div class="footer-copy">
            <div class="container">
                <p class="copy text-center">© {{ now()->year }} Be - Todos os direitos reservados</p>
            </div>
        </div>

    </footer>
    <!-- End Footer -->



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="https://sdk.mercadopago.com/js/v2"></script>

    <script src="{{ asset('/assets/js/app.js') }} "></script>




</body>

</html>
