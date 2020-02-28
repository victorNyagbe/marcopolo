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
                            <div class="alert alert-success alert-dismissible fade show mt-3 text-center">
                                {{ $message }}
                                <button type="button" class="close" aria-label="close" data-dismiss="alert">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if($message = Session::get('error'))
                            <div class="alert alert-success alert-dismissible fade show mt-3">
                                {{ $message }}
                                <button type="button" class="close" aria-label="close" data-dismiss="alert">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-8">
                        @foreach($couvertures as $couverture)
                            <img src="{{ URL::asset('storage/'.$couverture->image) }}" alt="couverture image" class="img-fluid img-thumbnail mb-3" width="100%">
                        @endforeach
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('home.couvertureEdit', $couverture->id) }}" class="text-center btn btn-warning btn-block mb-4">Modifier</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
