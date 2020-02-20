@extends('layouts.admin')

@section('welcome')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2"></div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->

                <div class="d-flex align-items-center justify-content-center">
                    <img src="{{ URL::asset('assets/images/logo.jpeg') }}" alt="marcopolo's logo" width="30%" class="img-fluid d-none d-xl-block" style="border-radius: 50%">
                    <img src="{{ URL::asset('assets/images/logo.jpeg') }}" alt="marcopolo's logo" width="60%" class="img-fluid d-none d-lg-block d-xl-none" style="border-radius: 50%; margin-top: 11rem;">
                    <img src="{{ URL::asset('assets/images/logo.jpeg') }}" alt="marcopolo's logo" width="70%" class="img-fluid d-block d-lg-none" style="border-radius: 50%">
                </div>

                <p class="mt-4 py-3 text-center" style="font-size: 2rem; font-style: italic;"><b>Bienvenue sur la page administrateur de Marco Polo</b></p>
                    {{--
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Enseignants</span>
                                <span class="info-box-number">41,410</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fa fa-money"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Finances</span>
                                <span class="info-box-number">760</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user-shield"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Responsables</span>
                                <span class="info-box-number">2,000</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>--}}
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
