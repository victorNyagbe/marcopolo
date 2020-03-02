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
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10">
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
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-xl-8">
                        <form action="{{ route('party.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="video" id="video" required class="form-control">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-info float-right btn-lg mt-3"><i class="fa fa-save"></i> Enregistrer la vidéo</button>
                            </div>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    @foreach($videos as $video)
                        <div class="col-6 col-md-4 col-xl-3">

                            <video controls width="100%">
                                <source src="{{ URL::asset('storage/'.$video->video) }}">
                            </video>
                            <div class="d-flex justify-content-center">
                                <form action="{{ route('party.delete') }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger mb-3" onclick="return confirm('Voulez vous vraiment supprimer cette vidéo ?')">supprimer <i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    {{ $videos->links() }}
                </div>
            </div>
        </section>
    </div>
@endsection
