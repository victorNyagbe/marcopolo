<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MarcoPolo</title>
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/mdbootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/mdbootstrap/css/mdb.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/mdbootstrap/css/mdb.lite.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('uikit-3.3.1/css/uikit.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('uikit-3.3.1/css/uikit-rtl.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/@fortawesome/fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/@fortawesome/fontawesome-free/css/brands.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/@fortawesome/fontawesome-free/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/@fortawesome/fontawesome-free/css/regular.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/@fortawesome/fontawesome-free/css/solid.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/@fortawesome/fontawesome-free/css/svg-with-js.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/@fortawesome/fontawesome-free/css/v4-shims.css') }}">
    <style>
        .marcoPolo-color {
            background-color: #001122;
        }
        body {
            font-family: Comfortaa;
            background-color: #001211;
        }
        @font-face {
            font-family: Comfortaa;
            src: url(fonts/Comfortaa-VariableFont_wght.ttf);
        }

        .smHide {
            width: 25%;
            background-color: #001211;
            position: fixed;
            bottom: 0;
            left: 0;
            top: 60px;
        }

        .body {
            width: 75%;
            position: absolute;
            right: 0;
            top: 65px;
            background-color: #001211;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark marcoPolo-color fixed-top scrolling-navbar">
    <a class="navbar-brand" href="#">
        <img src="{{ URL::asset('assets/images/logo.jpeg') }}" alt="Marco Polo" class="img-fluid rounded-circle" width="40">
    </a>
    <span class="text-center text-warning navbar-text d-block d-md-none">
        www.marcopolo.com
    </span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav d-flex flex-fill">
            <li class="nav-item active flex-fill">
                <a class="nav-link" href="#"><i class="fa fa-home"></i> Accueil <span class="sr-only">(current)</span></a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown flex-fill">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false"><i class="fas fa-shopping-bag"></i> Promotions</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Night Club</a>
                    <a class="dropdown-item" href="#">Artistes</a>
                    <a class="dropdown-item" href="#">Boissons</a>
                </div>
            </li>
            <li class="nav-item flex-fill">
                <a class="nav-link" href="#"><i class="fa fa-music"></i> Miami 228</a>
            </li>
        </ul>
    </div>
</nav>
<section class=" d-none d-md-block">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="mt-5"></div>
            <div class="smHide">
                <center>
                    <!--Carousel Wrapper-->
                    <div id="carousel-example-2" class="carousel slide carousel-fade mt-1" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="view">
                                    <img src="{{ URL::asset('assets/images/marco.jpg') }}" alt="Marco Polo Image" class="img-fluid rounded mt-3" width="85%">
                                    <div class="mask rgba-black-light"></div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!--Mask color-->
                                <div class="view">
                                    <img src="{{ URL::asset('assets/images/marco1.jpg') }}" alt="Marco Polo Image" class="img-fluid rounded mt-3" width="85%">
                                    <div class="mask rgba-black-light"></div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <!--Mask color-->
                                <div class="view">
                                    <img src="{{ URL::asset('assets/images/marco2.jpg') }}" alt="Marco Polo Image" class="img-fluid rounded mt-3" width="85%">
                                    <div class="mask rgba-black-light"></div>
                                </div>
                                {{--<div class="carousel-caption">
                                    <h3 class="h3-responsive">Slight mask</h3>
                                    <p>Third text</p>
                                </div>--}}
                            </div>
                        </div>
                        <!--/.Slides-->
                    </div>
                    <!--/.Carousel Wrapper-->
                </center>
                <p class="text-center p-2 text-white mt-3">
                    Je suis Marco Polo, promoteur, manager et gérant. Actuellement gérant à miami 228.
                </p>
            </div>
            <div class="py-4 body">
                @yield('content')
            </div>
        </div>
    </div>
</section>

<section class="d-block d-md-none">
    <div class="container-fluid">
        <div class="row">
            <!--Carousel Wrapper-->
            <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view">
                            <img src="{{ URL::asset('assets/images/marco.jpg') }}" alt="Marco Polo Image" class="img-fluid rounded mt-3" width="100%">
                            <div class="mask rgba-black-light"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <img src="{{ URL::asset('assets/images/marco1.jpg') }}" alt="Marco Polo Image" class="img-fluid rounded mt-3" width="100%">
                            <div class="mask rgba-black-light"></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <img src="{{ URL::asset('assets/images/marco2.jpg') }}" alt="Marco Polo Image" class="img-fluid rounded mt-3" width="100%">
                            <div class="mask rgba-black-light"></div>
                        </div>
                        {{--<div class="carousel-caption">
                            <h3 class="h3-responsive">Slight mask</h3>
                            <p>Third text</p>
                        </div>--}}
                    </div>
                </div>
                <!--/.Slides-->
            </div>
            <!--/.Carousel Wrapper-->
            <p class="text-center text-white p-2 mt-3 mt-auto" style="background-color: #001211">
                Je suis Marco Polo, promoteur, manager et gérant. Actuellement gérant à miami 228.
            </p>
        </div>
        <div class="py-4 mt-0">
            @yield('content')
        </div>
    </div>
</section>


<script src="{{ URL::asset('../node_modules/jquery/dist/jquery.js') }}"></script>
<script src="{{ URL::asset('../node_modules/mdbootstrap/js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('../node_modules/mdbootstrap/js/mdb.js') }}"></script>
<script src="{{ URL::asset('uikit-3.3.1/js/uikit.js') }}"></script>
<script src="{{ URL::asset('../node_modules/mdbootstrap/js/popper.js') }}"></script>
</body>
</html>
