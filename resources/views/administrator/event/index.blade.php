@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
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
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                                {{ $message }}
                                <button type="button" class="close" aria-label="close" data-dismiss="alert">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="{{ route('event.create') }}" class="btn btn-sm btn-primary mb-4"> Ajouter un événement</a>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-12 mb-4">
                        <h5><strong>Evénements en cours</strong></h5>
                        <hr>
                        <table id="example1" class="table table-bordered table-striped table-responsive-md">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Date</th>
                                <th>Heure</th>
                                <th>Lieu</th>
                                <th>Entrée</th>
                                <th colspan="4" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($events as $event)
                                <tr>
                                    <td class="">{{ $event->name }}</td>
                                    <td class="">{{ \Carbon\Carbon::parse($event->date)->format('d-m-Y') }}</td>
                                    <td class="">{{ $event->hour }}</td>
                                    <td class="">{{ $event->lieu }}</td>
                                    <td class="">
                                        @if($event->entry == null)
                                            Libre et gratuite
                                        @else
                                            {{ $event->entry. ' FCFA' }}
                                        @endif
                                    </td>
                                    <td width="100" class="text-center">
                                        <div class="btn-group">
                                            <form action="{{ route('event.delete', $event) }}" method="post">
                                                <div class="btn-group">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('event.show', $event->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('event.edit', $event->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez vous vraiment supprimer l\'événement {{ $event->name }} ?')"><i class="fa fa-trash"></i></button>
                                                </div>
                                            </form>
                                            <form action="{{ route('event.finished', $event) }}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="6">Aucun enregistrement</td>
                                </tr>
                            @endforelse
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Nom</th>
                                <th>Date</th>
                                <th>Heure</th>
                                <th>Lieu</th>
                                <th>Entrée</th>
                                <th colspan="4" class="text-center">Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <h5><strong>Evénements terminés</strong></h5>
                        <hr>
                        <table id="example1" class="table table-bordered table-striped table-responsive-md">
                            <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Date</th>
                                <th>Heure</th>
                                <th>Lieu</th>
                                <th>Entrée</th>
                                <th colspan="4" class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($eventFinished as $eventFinish)
                                <tr>
                                    <td class="">{{ $eventFinish->name }}</td>
                                    <td class="">{{ \Carbon\Carbon::parse($eventFinish->date)->format('d-m-Y') }}</td>
                                    <td class="">{{ $eventFinish->hour }}</td>
                                    <td class="">{{ $eventFinish->lieu }}</td>
                                    <td class="">
                                        @if($eventFinish->entry == null)
                                            Libre et gratuite
                                        @else
                                            {{ $eventFinish->entry. ' FCFA' }}
                                        @endif
                                    </td>
                                    <td width="100" class="text-center">
                                        <form action="{{ route('event.delete', $eventFinish) }}" method="post">
                                            <div class="btn-group">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('event.show', $eventFinish->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>

                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez vous vraiment supprimer l\'événement {{ $eventFinish->name }} ?')"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="6">Aucun enregistrement</td>
                                </tr>
                            @endforelse
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Nom</th>
                                <th>Date</th>
                                <th>Heure</th>
                                <th>Lieu</th>
                                <th>Entrée</th>
                                <th colspan="4" class="text-center">Action</th>
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
