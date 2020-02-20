@extends('layouts.app')

@section('style')
    <style>
        .Comfortaa {
            font-family: Comfortaa;
        }

        @font-face {
            font-family: Comfortaa;
            src: url("{{ URL::asset('fonts/Comfortaa-VariableFont_wght.ttf') }}");
        }

    </style>
@endsection

@section('content')
    <div class="container Comfortaa" style="background-color: #001211">
        <div class="row mb-5" style="padding-top: 6rem;">
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true; autoplay:true;">

                <ul class="uk-slider-items uk-grid">
                    <li class="uk-width-1-3@m uk-width-3-4">
                        <div class="uk-panel">
                            <img src="{{ URL::asset('assets/galerie/marco1.jpg') }}" alt="">
                        </div>
                    </li>
                    <li class="uk-width-1-3@m uk-width-3-4">
                        <div class="uk-panel">
                            <img src="{{ URL::asset('assets/galerie/marco8.jpg') }}" alt="">
                        </div>
                    </li>
                    <li class="uk-width-1-3@m uk-width-3-4">
                        <div class="uk-panel">
                            <img src="{{ URL::asset('assets/galerie/marco3.jpg') }}" alt="">
                        </div>
                    </li>
                    <li class="uk-width-1-3@m uk-width-3-4">
                        <div class="uk-panel">
                            <img src="{{ URL::asset('assets/galerie/marco9.jpg') }}" alt="">
                        </div>
                    </li>
                    <li class="uk-width-1-3@m uk-width-3-4">
                        <div class="uk-panel">
                            <img src="{{ URL::asset('assets/galerie/marco5.jpg') }}" alt="">
                        </div>
                    </li>
                    <li class="uk-width-1-3@m uk-width-3-4">
                        <div class="uk-panel">
                            <img src="{{ URL::asset('assets/galerie/marco6.jpg') }}" alt="">
                        </div>
                    </li>
                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"  uk-slideshow="ratio: 10:7; animation: pull; autoplay: true; autoplay-interval: 5000;">

                    <ul class="uk-slideshow-items uk-grid ">
                        <li>
                            <img src="{{ URL::asset('assets/images/4.jpg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ URL::asset('assets/images/3.jpg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ URL::asset('assets/images/2.jpg') }}" alt="">
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                </div>
            </div>
        </div>
    </div>
    @include('included.footer')
@endsection
