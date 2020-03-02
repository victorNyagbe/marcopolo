@extends('layouts.admin')

@section('drink')
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
                            <img src="{{ URL::asset('storage/'.$drink->image) }}" alt="image" width="50%" class="d-block d-lg-none mb-4 img-thumbnail img-fluid">
                            <img src="{{ URL::asset('storage/'.$drink->image) }}" alt="image" width="25%%" class="d-none d-lg-block mb-4 img-thumbnail img-fluid">
                            <h4><span><b>Nom : </b></span> {{ $drink->name }}</h4>
                            <h4><span><b>Prix : </b></span> {{ $drink->price }} FCFA</h4>
                            <h4><span><b>Catégorie : </b></span> {{ $drink->category->wording }}</h4>
                            <a href="{{ route('admin.drink') }}" class="mt-3 btn btn-secondary btn-sm"><i class="fa fa-arrow-circle-left"></i> Retour</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
