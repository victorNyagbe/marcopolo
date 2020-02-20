@extends('layouts.admin')

@section('style')
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ URL::asset('plugins/toastr/toastr.min.css') }}">
@endsection

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

                    <div class="col-12">
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible text-center fade show mb-4" role="alertdialog">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($homeProfile as $profile)
                        <div class="col-8 col-md-6 col-xl-4">
                            <img src="{{ URL::asset('storage/'.$profile->image) }}" class="img-fluid mb-1" alt="marcopolo image" width="100%">
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('home.profileEdit', $profile) }}" class=" text-center btn btn-warning btn-block mb-4 w-75">
                                    Modifier
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ URL::asset('plugins/toastr/toastr.min.js') }}"></script>
@endsection
