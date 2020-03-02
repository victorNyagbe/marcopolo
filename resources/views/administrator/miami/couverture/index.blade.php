@extends('layouts.admin')

@section('miami')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row"></div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        @if($errors->any())
                            <ul class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
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
                    <div class="row mt-5">
                        @foreach($couvertures as $couverture)
                            <div class="col-6 col-md-4 mb-3">
                                <img src="{{ URL::asset('storage/'.$couverture->image) }}" alt="couverture image" class="img-fluid mb-3" width="100%">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('miami.couvertureEdit', $couverture->id) }}" class="btn btn-warning btn-block w-75 mb-2">Modifier</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
