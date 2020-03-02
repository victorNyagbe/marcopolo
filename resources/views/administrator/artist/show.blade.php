@extends('layouts.admin')

@section('artist')
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
                            <img src="{{ URL::asset('storage/'.$artist->image) }}" alt="image" width="50%" class="d-block d-lg-none mb-4 img-thumbnail img-fluid">
                            <img src="{{ URL::asset('storage/'.$artist->image) }}" alt="image" width="25%%" class="d-none d-lg-block mb-4 img-thumbnail img-fluid">
                            <h4><span><b>Nom : </b></span><span class="text-uppercase"> {{ $artist->name }}</span></h4>
                            <h4>
                                @if($artist->whatsapp != null)
                                    <a href="https://wa.me/{{$artist->whatsapp}}" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                @endif
                                @if($artist->facebook != null)
                                    <a href="{{ $artist->facebook }}" class="btn btn-primary btn-sm" target="_blank"><i class="fa fa-facebook"></i></a>
                                @endif
                                @if($artist->instagram != null)
                                    <a href="{{ $artist->instagram }}" class="btn btn-danger btn-sm" target="_blank"><i class="fa fa-instagram"></i></a>
                                @endif
                                @if($artist->youtube != null)
                                    <a href="{{ $artist->youtube }}" class="btn btn-light btn-sm" target="_blank"><i class="fa fa-youtube text-danger"></i></a>
                                @endif
                            </h4>
                            <a href="{{ route('admin.artist') }}" class="mt-3 btn btn-secondary btn-sm"><i class="fa fa-arrow-circle-left"></i> Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
