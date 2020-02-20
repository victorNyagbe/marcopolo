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
                        <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('assets/discJockeys/DJ Mickel.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body bg-warning">

                        <!--Title-->
                        <h4 class="card-title text-center text-white text-uppercase">dj mickel</h4>
                        <p class="text-center">
                            <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                        </p>
                        <!--Text-->
                        <hr>
                        <p class="card-text text-center">
                            <a href="#"><i class="fa fa-whatsapp text-success fa-2x mx-2"></i></a>
                            <a href="#"><i class="fa fa-facebook text-primary fa-2x mx-2"></i></a>
                            <a href="#"><i class="fa fa-twitter text-info fa-2x mx-2"></i></a>
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
                        <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('assets/discJockeys/AWAL DJ.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body bg-warning">

                        <!--Title-->
                        <h4 class="card-title text-center text-white text-uppercase">dj awal</h4>
                        <p class="text-center">
                            <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                        </p>
                        <!--Text-->
                        <hr>
                        <p class="card-text text-center">
                            <a href="#"><i class="fa fa-whatsapp text-success fa-2x mx-2"></i></a>
                            <a href="#"><i class="fa fa-facebook text-primary fa-2x mx-2"></i></a>
                            <a href="#"><i class="fa fa-twitter text-info fa-2x mx-2"></i></a>
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
                        <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('assets/discJockeys/dj nalo.jpg') }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body bg-warning">

                        <!--Title-->
                        <h4 class="card-title text-center text-white text-uppercase">dj nalo</h4>
                        <p class="text-center">
                            <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                        </p>
                        <!--Text-->
                        <hr>
                        <p class="card-text text-center">
                            <a href="#"><i class="fa fa-whatsapp text-success fa-2x mx-2"></i></a>
                            <a href="#"><i class="fa fa-facebook text-primary fa-2x mx-2"></i></a>
                            <a href="#"><i class="fa fa-twitter text-info fa-2x mx-2"></i></a>
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
