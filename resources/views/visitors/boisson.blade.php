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
            @foreach($wines as $wine)
                <div class="col mb-4">
                    <!-- Card -->
                    <div class="card z-depth-5">
                        <!--Card image-->
                        <div class="view overlay uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('storage/'.$wine->image) }}"
                                 alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card content-->
                        <div class="card-body bg-danger">

                            <!--Title-->
                            <span class="card-title text-white pl-xl-4">{{ $wine->name }}</span><br>
                            <span class="float-right">{{ $wine->price }} FCFA</span><br>
                            <p class="text-center">
                                <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                            </p>
                        </div>

                    </div>
                    <!-- Card -->
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center" style="padding-top: 6rem;">
            <p class="bg-light text-dark px-5 py-2 text-center"><i class="text-white icofont-water-drop"></i> Eau</p>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3" style="padding-top: 1rem;">
            @foreach($waters as $water)
                <div class="col mb-4">
                    <!-- Card -->
                    <div class="card z-depth-5">
                        <!--Card image-->
                        <div class="view overlay uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('storage/'.$water->image) }}"
                                 alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card content-->
                        <div class="card-body bg-light">

                            <!--Title-->
                            <span class="card-title text-dark p-lg-4">{{ $water->name }}</span>
                            <span class="float-right text-dark">{{ $water->price }} FCFA</span>
                            <p class="text-center text-dark">
                                <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                            </p>
                        </div>

                    </div>
                    <!-- Card -->
                </div>
            @endforeach
        </div>
        <div class="row justify-content-center" style="padding-top: 6rem;">
            <p class="bg-dark text-white px-5 py-2 text-center"><i class="icofont-beer"></i> Bières</p>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3" style="padding-top: 1rem;">
            @foreach($beers as $beer)
                <div class="col mb-4">
                    <!-- Card -->
                    <div class="card z-depth-5">
                        <!--Card image-->
                        <div class="view overlay uk-inline-clip uk-transition-toggle" tabindex="0">
                            <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('storage/'.$beer->image) }}"
                                 alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card content-->
                        <div class="card-body bg-dark">

                            <!--Title-->
                            <span class="card-title text-white p-lg-4">{{ $beer->name }}</span>
                            <span class="float-right">{{ $beer->price }} FCFA</span>
                            <p class="text-center ">
                                <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                            </p>
                        </div>

                    </div>
                    <!-- Card -->
                </div>
            @endforeach
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
