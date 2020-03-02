@extends('layouts.admin')

@section('gallery')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row"></div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        @if($errors->any())
                            <ul class="alert alert-danger alert-dismissible list-unstyled fade show mt-4" role="alert">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </ul>
                        @endif
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                                {{ $message }}
                                <button type="button" class="close" aria-label="close" data-dismiss="alert">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image[]" id="image" class="form-control" required multiple>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success px-5 py-2 my-3">Valider</button>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($galleries as $gallery)
                        <div class="col-6 col-md-3">
                            <img src="{{ URL::asset('storage/'. $gallery->image) }}" alt="image_galerie" class="w-100">
                            <form action="{{ route('gallery.delete', $gallery->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm my-2">Supprimer</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
