@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('artist')
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
                        <a href="{{ route('admin.artistCreate') }}" class="btn btn-dark float-right"><i class="fa fa-plus-circle"></i> Ajouter un artiste</a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <table id="example1" class="table table-bordered table-striped table-responsive-md">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Réseaux</th>
                                <th colspan="3" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($artists as $artist)
                                <tr>
                                    <td class="text-lg-center text-uppercase" width="150">{{ $artist->name }}</td>
                                    <td class="text-lg-center" width="240">
                                        @if($artist->whatsapp != null)
                                            <a href="https://wa.me/{{$artist->whatsapp}}" class="btn btn-success btn-sm" target="_blank"><i class="fa fa-whatsapp"></i></a>
                                        @endif
                                        @if($artist->facebook != null)
                                            <a href="{{ $artist->facebook }}" class="btn btn-primary btn-sm" target="_blank"><i class="fa fa-facebook"></i></a>
                                        @endif
                                        @if($artist->instagram != null)
                                            <a href="{{ $artist->instagram }}" class="btn btn-danger btn-sm" target="_blank"><i class="fa fa-instagram"></i></a>
                                        @endif
                                        @if($artist->youtube != null)
                                            <a href="{{ $artist->youtube }}" class="btn btn-light btn-sm" target="_blank"><i class="fa fa-youtube text-danger"></i></a>
                                        @endif
                                        @if($artist->whatsapp == null && $artist->facebook == null && $artist->instagram == null && $artist->youtube == null)
                                            <span class="text-center">Aucun</span>
                                        @endif
                                    </td>
                                    <td width="100" class="text-center">
                                        <form action="{{ route('admin.artistDelete', $artist) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <div class="btn-group">
                                                <a href="{{ route('admin.artistShow', $artist->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('admin.artistEdit', $artist->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez vous vraiment supprimer {{ $artist->name }} ?')"><i class="fa fa-trash"></i></button>
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
                                <th>Réseaux</th>
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
