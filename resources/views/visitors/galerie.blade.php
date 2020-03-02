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
        <div class="row pt-5"></div>
        <div class="row pt-5 mb-4">
            @foreach($galleries as $gallery)
                <div class="col-6 col-md-3">
                    <img src="{{ URL::asset('storage/'. $gallery->image) }}" alt="image_galerie" class="w-100">
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $galleries->links() }}
        </div>
    </div>
    @include('included.footer')
@endsection
