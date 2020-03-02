@extends('layouts.admin')

@section('party')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row"></div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show text-center mt-3" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="jumbotron">
                            <img src="{{ URL::asset('storage/'.$event->image) }}" alt="image" width="100%" class="d-block d-lg-none mb-4 img-thumbnail img-fluid">
                            <center><img src="{{ URL::asset('storage/'.$event->image) }}" alt="image" width="50%" class=" d-none d-lg-block mb-4 img-thumbnail img-fluid"></center>
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-4 col-lg-3">
                                    <h5><span><b>Nom : </b></span><span> {{ $event->name }}</span></h5>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3 mb-3">
                                    <h5><span><b>Date : </b></span><span> {{ \Carbon\Carbon::parse($event->date)->format('d-m-Y') }}</span></h5>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3 mb-3">
                                    <h5><span><b>Heure : </b></span><span> {{ substr($event->hour, 0, 2) }} h {{ substr($event->hour, 3) }}</span></h5>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3 mb-3">
                                    <h5><span><b>Lieu : </b></span><span> {{ $event->lieu }}</span></h5>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3 mb-3">
                                    <h5><span><b>Artistes : </b></span><span>{{ $event->artist == null ? 'Aucun artiste' : $event->artist }}</span></h5>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3 mb-3">
                                    <h5><span><b>Djs : </b></span><span class="text-uppercase"> {{ $event->discJockey == null ? 'Aucun dj' : $event->discJockey}}</span></h5>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3 mb-3">
                                    <h5><span><b>DressCode : </b></span><span> {{ $event->dressCode == null ? 'Tenue non exigée' : $event->dressCode }}</span></h5>
                                </div>
                                <div class="col-12 col-md-4 col-lg-3 mb-3">
                                    <h5><span><b>Entrée : </b></span><span> {{ $event->entry == null ? 'Libre et gratuite' : $event->entry.' FCFA' }}</span></h5>
                                </div>
                            </div>
                            <a href="{{ route('event.index') }}" class="mt-3 btn btn-secondary btn-sm"><i class="fa fa-arrow-circle-left"></i> Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
