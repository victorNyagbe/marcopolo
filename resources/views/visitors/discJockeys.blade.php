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
            @foreach($discJockeys as $discJockey)
            <div class="col mb-4">
                <!-- Card -->
                <div class="card z-depth-5">
                    <!--Card image-->
                    <div class="view overlay uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img class="card-img-top uk-transition-scale-up uk-transition-opaque" src="{{ URL::asset('storage/'.$discJockey->image) }}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                    <!--Card content-->
                    <div class="card-body bg-warning">

                        <!--Title-->
                        <h4 class="card-title text-center text-white text-uppercase">{{ $discJockey->name }}</h4>
                        <p class="text-center">
                            <i class="fa fa-mobile-phone"></i><span> +228 91 01 92 45 </span>
                        </p>
                        <!--Text-->
                        <hr>
                        <p class="card-text text-center">
                            @if($discJockey->whatsapp != null)
                                <a href="https://wa.me/{{ $discJockey->whatsapp }}"><i class="fa fa-whatsapp text-success fa-2x mx-2"></i></a>
                            @endif
                            @if($discJockey->facebook != null)
                                <a href="{{ $discJockey->facebook }}" target="_blank"><i class="fa fa-facebook text-primary fa-2x mx-2"></i></a>
                            @endif
                            @if($discJockey->instagram != null)
                                <a href="{{ $discJockey->instagram }}" target="_blank"><i class="fa fa-instagram text-danger fa-2x mx-2"></i></a>
                            @endif
                            @if($discJockey->youtube != null)
                                <a href="{{ $discJockey->youtube }}" target="_blank"><i class="fa fa-youtube text-danger fa-2x mx-2"></i></a>
                            @endif
                        </p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
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
