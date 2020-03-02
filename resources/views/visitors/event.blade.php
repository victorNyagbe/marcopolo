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
        <div class="row pt-5 mb-3">
            @foreach($events as $event)
                <div class="col-12 col-md-6 pt-5">
                    <div class="card">
                        <!-- Card image -->
                        <img class="card-img-top" src="{{ URL::asset('storage/'.$event->image) }}" alt="Card image cap">
                    </div>
                    <!-- Card -->
                    <div class="card-body bg-dark text-justify">

                        <!-- Title -->
                        <h4 class="card-title text-white h3-responsive"><a>{{ $event->name }}</a></h4>
                        <!-- Text -->
                        <p class="card-text text-white">
                            <span class="row">
                                <span class="col-6">
                                    <span> Date : {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</span><br><br>
                                </span>
                                <span class="col-6">
                                    <span> Heure : {{ substr($event->hour, 0, 2). ' h '. substr($event->hour, 3) }}</span><br><br>
                                </span>
                            </span>
                            <span class="row">
                                <span class="col-6">
                                    <span> Lieu : {{ $event->lieu }}</span><br><br>
                                </span>
                                <span class="col-6">
                                    <span> Entrée : {{ $event->entry == null ? 'Libre et gratuite' : $event->entry.' FCFA' }}</span><br><br>
                                </span>
                            </span>


                            @if($event->dressCode != null)
                                <span> Dress code : {{ $event->dressCode }}</span><br><br>
                            @endif
                            @if($event->artist != null)
                                <span> Dress code : {{ $event->artist }}</span><br><br>
                            @endif
                            @if($event->discJockey != null)
                                <span> Dress code : {{ $event->discJockey }}</span><br><br>
                            @endif


                        </p>
                        <a href="https://wa.me/22891019245" class="btn btn-warning text-uppercase btn-block reserver"> Reserver</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('included.footer')
@endsection
