@extends('layouts.admin')

@section('miami')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="conainer-fluid">
                <div class="row"></div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @if($errors->any())
                            <ul class="alert alert-danger alert-dismissible fade show  mb-4" role="alert">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center">
                    <img src="{{ URL::asset('assets/images/logo.jpeg') }}" alt="marcopolo's logo" width="20%" class="img-fluid " style="border-radius: 50%">
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <form action="{{ route('miami.imageUpdate', $miami) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="modal-body">
                                <input type="file" required name="image" accept=".image/jpeg,.png,.jpg" id="image" class="form-control">
                            </div>
                            <div class="float-right mr-5">
                                <a href="{{ route('miami.image') }}" class="btn btn-default">Annuler</a>
                                <button type="submit" class="btn btn-primary apply">Appliquer</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
