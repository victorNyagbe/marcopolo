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
    <link rel="stylesheet" href="{{ URL::asset('icofont/icofont.css') }}">
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
    @yield('style')
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark marcoPolo-color fixed-top scrolling-navbar">
    <a class="navbar-brand" href="{{ route('welcome') }}">
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
                <a class="nav-link" href="{{ route('welcome') }}"><i class="fa fa-home"></i> Accueil <span class="sr-only">(current)</span></a>
            </li>
            <!-- Dropdown -->
            <li class="nav-item dropdown flex-fill">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false"><i class="fas fa-shopping-bag"></i> Promotions</a>
                <div class="dropdown-menu dropdown-primary bg-warning" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('promotions.discJockeys') }}"> DJ</a>
                    <a class="dropdown-item" href="{{ route('promotions.artistes') }}"> Artistes</a>
                    <a class="dropdown-item" href="{{ route('promotions.boissons') }}"> Boissons</a>
                </div>
            </li>
            <li class="nav-item flex-fill">
                <a class="nav-link" href="{{ route('miami228') }}"><i class="fa fa-music"></i> Miami 228</a>
            </li>
            <li class="nav-item flex-fill">
                <a class="nav-link" href="{{ route('galerie') }}"><i class="fa fa-photo"></i> Galerie</a>
            </li>
        </ul>
    </div>
</nav>

@yield('content')



<script src="{{ URL::asset('../node_modules/jquery/dist/jquery.js') }}"></script>
<script src="{{ URL::asset('../node_modules/mdbootstrap/js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('../node_modules/mdbootstrap/js/mdb.js') }}"></script>
<script src="{{ URL::asset('uikit-3.3.1/js/uikit.js') }}"></script>
<script src="{{ URL::asset('../node_modules/mdbootstrap/js/popper.js') }}"></script>
</body>
</html>
