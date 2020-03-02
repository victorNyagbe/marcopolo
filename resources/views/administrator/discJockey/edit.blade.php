@extends('layouts.admin')

@section('dj')
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
                            <ul class="alert alert-danger alert-dismissible fade show mt-3 list-unstyled" role="alert">
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
                    <div class="col-12 col-md-8">
                        <div class="card">
                            <form role="form" action="{{ route('admin.djUpdate', $discJockey) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nom</label>
                                        <input type="text" name="name" class="form-control" id="name" value="{{ $discJockey->name ?? old('name') }}" required placeholder="Saisir le nom ...">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" value="{{ $discJockey->image }}" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choisir un fichier</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Charger</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="whatsapp">Whatsapp</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-success"><i class="fa fa-whatsapp"></i></span>
                                                </div>
                                                <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="{{ $discJockey->whatsapp ?? old('whatsapp') }}" placeholder="Exemple: 22890909090">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="facebook">Facebook</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-primary"><i class="fa fa-facebook"></i></span>
                                                </div>
                                                <input type="url" name="facebook" value="{{ $discJockey->facebook ?? old('facebook') }}" id="facebook" class="form-control" placeholder="https://facebook.com/example">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <label for="instagram">Instagram</label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-danger"><i class="fa fa-instagram"></i></span>
                                                </div>
                                                <input type="url" name="instagram" id="instagram" value="{{ $discJockey->instagram ?? old('instagram') }}" class="form-control" placeholder="https://instagram.com/example">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="youtube">Youtube</label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-white"><i class="fa fa-youtube text-danger"></i></span>
                                                </div>
                                                <input type="url" name="youtube" id="youtube" value="{{ $discJockey->youtube ?? old('youtube') }}" class="form-control" placeholder="https://youtube.com/example">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-4">
                                    <div class="text-muted ml-3" style="font-size: 14px; font-style: italic;"> - Les réseaux sociaux sont optionnels</div>
                                    <div class="text-muted ml-3" style="font-size: 14px; font-style: italic;"> - Ne mettez pas + ou 00 dans le champ de whatsapp. Ecrivez juste l'indicatif du pays suivi du numero.
                                        <br> Exemple: 22890909090</div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Modifier <i class="fa fa-check-circle-o"></i> </button>
                                    <a href="{{ route('admin.djs') }}" class="btn btn-light"><i class="fa fa-arrow-circle-left"></i> Annuler</a>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
