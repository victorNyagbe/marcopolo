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
    <div class="container text-white Comfortaa" style="background-color: #001211;">
        <div class="row pt-5 mb-4">
            @foreach($videos as $video)
                <div class="col-6 pt-5">
                    <video controls width="100%">
                        <source src="{{ URL::asset('storage/'.$video->video) }}" >
                    </video>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $videos->links() }}
        </div>
    </div>
    @include('included.footer')
@endsection
