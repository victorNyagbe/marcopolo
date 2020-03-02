@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('plugins/daterangepicker/daterangepicker.css') }}">
@endsection

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
                    <div class="col-12 col-md-10 col-lg-8">
                        @if($errors->any())
                            <ul class="alert alert-danger alert-dismissible list-unstyled fade show mt-3" role="alert">
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
                <div class="row justify-content-center">
                    <div class="col-12">
                        <form action="{{ route('event.update', $event) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Nom *</label>
                                        <input type="text" name="name" id="name" value="{{ $event->name }}" class="form-control" placeholder="Saisir le nom..." required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="date">Date *</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="date" id="date" required name="date" value="{{ \Carbon\Carbon::parse($event->date)->format('Y-m-d') }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-4">
                                    <div class="form-group">
                                        <label for="hour">Heure *</label>
                                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                                            <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-clock"></i></div>
                                            </div>
                                            <input type="text" required name="hour" class="form-control datetimepicker-input" value="{{ $event->hour }}" placeholder="Exemple: 22:00" data-target="#timepicker"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="lieu">Lieu *</label>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <div class="input-group-text"><i class="fa fa-map-marker"></i></div>
                                            </div>
                                            <input type="text" name="lieu" id="lieu" required class="form-control" value="{{ $event->lieu }}" placeholder="Sasir le lieu...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="artist">Artistes</label>
                                        <input type="text" name="artist" id="artist" value="{{ $event->artist }}" class="form-control" placeholder="Saisir le nom des artistes...">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="discJockey">Djs</label>
                                        <input type="text" name="discJockey" id="discJockey" value="{{ $event->discJockey }}" class="form-control" placeholder="Saisir le nom des djs...">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="dressCode">Dress Code</label>
                                        <input type="text" name="dressCode" id="dressCode" value="{{ $event->dressCode }}" class="form-control" placeholder="Saisir le dressCode...">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="entry">Entrée</label>
                                        <div class="input-group">
                                            <input type="text" name="entry" id="entry" value="{{ $event->entry }}" class="form-control" placeholder="Saisir le montant...">
                                            <div class="input-group-append">
                                                <div class="input-group-text"><span>FCFA</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group my-4">
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary px-5 py-2">Modifier</button>
                                </div>

                            </div>
                        </form>
                        <span style="font-size: 16px; font-style: italic;">
                            - Les champs qui comportent l'astérisk (*) sont obligatoires.
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/inputmask/min/jquery.inputmask.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ URL::asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ URL::asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            //$('#datemask').inputmask('Y-m-d', { 'placeholder': 'aaaa-mm-jj' });
            $('#timepicker').datetimepicker({
                format: 'HH:mm'
            })
        });
    </script>
@endsection
