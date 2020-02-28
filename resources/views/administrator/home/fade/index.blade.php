@extends('layouts.admin')

@section('home')
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
                        @if($errors->any())
                            <ul class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </ul>
                        @endif
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-3 text-center" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if($message = Session::get('error'))
                            <div class="alert alert-success alert-danger fade show mt-3" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="d-none d-lg-block my-5"></div>
                <div class="row justify-content-center mt-lg-5">
                    @foreach($fades as $fade)
                        <div class="col-8 col-md-6 col-xl-3 mt-lg-5">
                            <img src="{{ URL::asset('storage/'.$fade->image) }}" alt="image accueil" class="img-fluid mb-1" width="100%">
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('home.fadeEdit', $fade) }}" class="text-center btn btn-block btn-warning w-75">Modifier</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
