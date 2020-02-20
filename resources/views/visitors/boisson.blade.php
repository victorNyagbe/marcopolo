@extends('layouts.app')

@section('style')
    <style>
        .Comfortaa {
            font-family: Comfortaa;
        }

        @font-face {
            font-family: Comfortaa;
            src: url("{{ URL::asset('/fonts/Comfortaa-VariableFont_wght.ttf') }}");
        }

    </style>
@endsection

@section('content')
    <div class="container text-white Comfortaa" style="background-color: #001211">
        <div class="row justify-content-center" style="padding-top: 6rem;">
            <p class="bg-danger text-white px-5 py-2 text-center"><i class="fas fa-wine-bottle"></i> Vins</p>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3" style="padding-top: 1rem;">
            <div class="col mb-4">
                <!-- Card -->
                <div class="card z-depth-5">
                    <!--Card image-->
                    <div class="view overlay uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('assets/boissons/boisson1.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body bg-danger">

                        <!--Title-->
                        <span class="card-title text-white pl-xl-4">Châteaux de France</span><br>
                        <span class="float-right">10000 FCFA</span><br>
                        <p class="text-center">
                            <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                        </p>
                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <!-- Card -->
                <div class="card z-depth-5">

                    <!--Card image-->
                    <div class="view overlay uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('assets/boissons/boisson2.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body bg-danger">

                        <!--Title-->
                        <span class="card-title text-white pl-xl-4">Domaine du moulin</span><br>
                        <span class="float-right">10000 FCFA</span><br>
                        <p class="text-center">
                            <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                        </p>
                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <!-- Card -->
                <div class="card z-depth-5">

                    <!--Card image-->
                    <div class="view overlay uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('assets/boissons/boisson1.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body bg-danger">

                        <!--Title-->
                        <span class="card-title text-white pl-xl-4">Loxton</span><br>
                        <span class="float-right">10000 FCFA</span><br>
                        <p class="text-center">
                            <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="padding-top: 6rem;">
            <p class="bg-light text-dark px-5 py-2 text-center"><i class="text-white icofont-water-drop"></i> Eau</p>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3" style="padding-top: 1rem;">
            <div class="col mb-4">
                <!-- Card -->
                <div class="card z-depth-5">
                    <!--Card image-->
                    <div class="view overlay uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('assets/boissons/eau/eau.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body bg-light">

                        <!--Title-->
                        <span class="card-title text-dark p-lg-4">Voltic</span>
                        <span class="float-right text-dark">300 FCFA</span>
                        <p class="text-center text-dark">
                            <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                        </p>
                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <!-- Card -->
                <div class="card z-depth-5">

                    <!--Card image-->
                    <div class="view overlay uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('assets/boissons/eau/eau.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body bg-light">

                        <!--Title-->
                        <span class="card-title text-dark p-lg-4">Water</span>
                        <span class="float-right text-dark">500 FCFA</span>
                        <p class="text-center text-dark">
                            <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                        </p>
                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <!-- Card -->
                <div class="card z-depth-5">

                    <!--Card image-->
                    <div class="view overlay uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('assets/boissons/eau/eau.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body bg-light">

                        <!--Title-->
                        <span class="card-title text-dark p-lg-4">Vitale</span>
                        <span class="float-right text-dark">200 FCFA</span>
                        <p class="text-center text-dark">
                            <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="padding-top: 6rem;">
            <p class="bg-dark text-white px-5 py-2 text-center"><i class="icofont-beer"></i> Bières</p>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3" style="padding-top: 1rem;">
            <div class="col mb-4">
                <!-- Card -->
                <div class="card z-depth-5">
                    <!--Card image-->
                    <div class="view overlay uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('assets/boissons/beer/beer2.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body bg-dark">

                        <!--Title-->
                        <span class="card-title text-white p-lg-4">Guinness</span>
                        <span class="float-right">600 FCFA</span>
                        <p class="text-center ">
                            <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                        </p>
                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <!-- Card -->
                <div class="card z-depth-5">

                    <!--Card image-->
                    <div class="view overlay uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('assets/boissons/beer/beer1.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body bg-dark">

                        <!--Title-->
                        <span class="card-title text-white p-lg-4">Heineken</span>
                        <span class="float-right">1000 FCFA</span>
                        <p class="text-center">
                            <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                        </p>
                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <!-- Card -->
                <div class="card z-depth-5">

                    <!--Card image-->
                    <div class="view overlay uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('assets/boissons/beer/beer2.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body bg-dark">

                        <!--Title-->
                        <span class="card-title text-white p-lg-4">Pils</span>
                        <span class="float-right">700 FCFA</span>
                        <p class="text-center">
                            <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <blockquote class="blockquote mb-5 bq-warning">
                    <p class="mb-0 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer mb-3 text-white">Marco Polo</footer>
                </blockquote>
            </div>
        </div>
    </div>
    @include('included.footer')
@endsection
