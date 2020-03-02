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
                            <form role="form" action="{{ route('admin.drinkUpdate', $drink) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="categories">Catégorie</label>
                                        <select name="categories" id="categories" required class="form-control">
                                            <option value="">Veuillez choisir ...</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" class="text-capitalize" {{ $category->id == $drink->category_id ? 'selected' : '' }}>{{ $category->wording }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="name">Nom</label>
                                                <input type="text" value="{{ $drink->name }}" name="name" class="form-control" id="name" required placeholder="Saisir le nom ...">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="price">Prix</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" value="{{ $drink->price }}" name="price" id="price" required placeholder="Saisir le prix ...">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">FCFA</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choisir un fichier</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Charger</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Modifier <i class="fa fa-check-circle-o"></i> </button>
                                    <a href="{{ route('admin.drink') }}" class="btn btn-light"><i class="fa fa-arrow-circle-left"></i> Annuler</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
