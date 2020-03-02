@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

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
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show text-center mt-3" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <a href="{{ route('admin.drinkCreate') }}" class="btn btn-dark float-right"><i class="far fa-plus-square"></i> Ajouter une boisson</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table id="example1" class="table table-bordered table-striped table-responsive-md">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Catégorie</th>
                                <th colspan="3" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($drinks as $drink)
                                    <tr>
                                        <td class="text-lg-center">{{ $drink->name }}</td>
                                        <td class="text-center">{{ $drink->price }} FCFA</td>
                                        <td class="text-center text-capitalize">{{ $drink->category->wording }}</td>
                                        <td width="170" class="text-center">
                                            <form action="{{ route('admin.drinkDelete', $drink) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="btn-group">
                                                    <a href="{{ route('admin.drinkShow', $drink->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                                    <a href="{{ route('admin.drinkEdit', $drink->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez vous vraiment supprimer {{ $drink->name }} ?')"><i class="fa fa-trash"></i></button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="4">Aucun enregistrement</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Catégorie</th>
                                <th colspan="3" class="text-center">Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        $(document).ready(function () {
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            });
        });

    </script>
@endsection
