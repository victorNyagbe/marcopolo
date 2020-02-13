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
    <div class="container Comfortaa" style="background-color: #001211">
        <div class="row" style="padding-top: 6rem;">
            <div class="col-12 col-md-4 mb-5">
                <img src="{{ URL::asset('assets/galerie/marco1.jpg') }}" alt="marcopolo_image" width="100%" class="rounded-2">
            </div>
            <div class="col-12 col-md-4 mb-5">
                <img src="{{ URL::asset('assets/galerie/marco8.jpg') }}" alt="marcopolo_image" width="100%" class="rounded-2">
            </div>
            <div class="col-12 col-md-4 mb-5">
                <img src="{{ URL::asset('assets/galerie/marco3.jpg') }}" alt="marcopolo_image" width="100%" class="rounded-2">
            </div>
            <div class="col-12 col-md-4 mb-5">
                <img src="{{ URL::asset('assets/galerie/marco9.jpg') }}" alt="marcopolo_image" width="100%" class="rounded-2">
            </div>
            <div class="col-12 col-md-4 mb-5">
                <img src="{{ URL::asset('assets/galerie/marco5.jpg') }}" alt="marcopolo_image" width="100%" class="rounded-2">
            </div>
            <div class="col-12 col-md-4 mb-5">
                <img src="{{ URL::asset('assets/galerie/marco6.jpg') }}" alt="marcopolo_image" width="100%" class="rounded-2">
            </div>
        </div>
    </div>
    @include('included.footer')
@endsection
