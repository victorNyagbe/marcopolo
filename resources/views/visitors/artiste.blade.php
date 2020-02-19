@extends('layouts.app')

@section('style')
    <style>
        .Comfortaa {
            font-family: Comfortaa;
        }

        @font-face {
            font-family: Comfortaa;
            src: url(../fonts/Comfortaa-VariableFont_wght.ttf);
        }

    </style>
@endsection

@section('content')
    <div class="container text-white Comfortaa" style="background-color: #001211">
        <div class="row row-cols-1 row-cols-md-3" style="padding-top: 6rem;">
            <div class="col mb-4">
                <!-- Card -->
                <div class="card z-depth-5">
                    <!--Card image-->
                    <div class="view overlay uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('assets/artistes/kiko.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body bg-warning">

                        <!--Title-->
                        <h4 class="card-title text-center text-white">Kiko</h4>
                        <p class="text-center">
                            <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                        </p>
                        <!--Text-->
                        <hr>
                        <p class="card-text text-center">
                            <a href="#"><i class="fa fa-whatsapp text-white fa-2x mx-2"></i></a>
                            <a href="#"><i class="fa fa-facebook text-white fa-2x mx-2"></i></a>
                            <a href="#"><i class="fa fa-twitter text-white fa-2x mx-2"></i></a>
                            <a href="#" class="btn btn-white">Voir sons <i class="fa fa-headphones"></i></a>
                        </p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <!-- Card -->
                <div class="card z-depth-5">

                    <!--Card image-->
                    <div class="view overlay uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('assets/artistes/pikaluz.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body bg-warning">

                        <!--Title-->
                        <h4 class="card-title text-center text-white">Pikaluz</h4>
                        <p class="text-center">
                            <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                        </p>
                        <!--Text-->
                        <hr>
                        <p class="card-text text-center">
                            <a href="#"><i class="fa fa-whatsapp text-white fa-2x mx-2"></i></a>
                            <a href="#"><i class="fa fa-facebook text-white fa-2x mx-2"></i></a>
                            <a href="#"><i class="fa fa-twitter text-white fa-2x mx-2"></i></a>
                            <a href="#" class="btn btn-white">Voir sons <i class="fa fa-headphones"></i></a>
                        </p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4">
                <!-- Card -->
                <div class="card z-depth-5">

                    <!--Card image-->
                    <div class="view overlay uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('assets/artistes/Sans titre-1.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body bg-warning">

                        <!--Title-->
                        <h4 class="card-title text-center text-white">Black T</h4>
                        <p class="text-center">
                            <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                        </p>
                        <!--Text-->
                        <hr>
                        <p class="card-text text-center">
                            <a href="#"><i class="fa fa-whatsapp text-white fa-2x mx-2"></i></a>
                            <a href="#"><i class="fa fa-facebook text-white fa-2x mx-2"></i></a>
                            <a href="#"><i class="fa fa-twitter text-white fa-2x mx-2"></i></a>
                            <a href="#" class="btn btn-white">Voir sons <i class="fa fa-headphones"></i></a>
                        </p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
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
