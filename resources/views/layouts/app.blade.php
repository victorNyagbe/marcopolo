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
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/@fortawesome/fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/@fortawesome/fontawesome-free/css/brands.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/@fortawesome/fontawesome-free/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/@fortawesome/fontawesome-free/css/regular.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/@fortawesome/fontawesome-free/css/solid.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/@fortawesome/fontawesome-free/css/svg-with-js.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('../node_modules/@fortawesome/fontawesome-free/css/v4-shims.css') }}">
    <style>
        .marcoPolo-color {
            background-color: #001211;
        }
        body {
            font-family: Comfortaa;
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
            top: 76px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark marcoPolo-color">
    <a class="navbar-brand" href="#">
        <img src="{{ URL::asset('assets/images/logo.jpeg') }}" alt="Marco Polo" class="img-fluid rounded-circle" width="50">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Presentation <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Promotions</a>
            </li>
        </ul>
    </div>
</nav>
<section class=" d-none d-md-block smHide">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="mt-5"></div>
            <div class="mt-4">
                <center><img src="{{ URL::asset('assets/images/presentation.jpg') }}" alt="Marco Polo Image" class="img-fluid rounded-circle" width="50%"></center>
            </div>
        </div>
    </div>
</section>


<script src="{{ URL::asset('../node_modules/jquery/dist/jquery.js') }}"></script>
<script src="{{ URL::asset('../node_modules/mdbootstrap/js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('../node_modules/mdbootstrap/js/mdb.js') }}"></script>
<script src="{{ URL::asset('../node_modules/mdbootstrap/js/popper.js') }}"></script>
</body>
</html>
