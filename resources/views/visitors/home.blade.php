@extends('layouts.app')

@section('content')
    <section class=" d-none d-md-block">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="mt-5"></div>
                <div class="smHide">
                    <center>
                        <!--Carousel Wrapper-->
                        <div id="carousel-example-2" class="carousel slide carousel-fade mt-1" data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-2" data-slide-to="1"></li>
                                <li data-target="#carousel-example-2" data-slide-to="2"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="view">
                                        <img src="{{ URL::asset('assets/images/marco.jpg') }}" alt="Marco Polo Image" class="img-fluid rounded mt-3" width="85%">
                                        <div class="mask rgba-black-light"></div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <!--Mask color-->
                                    <div class="view">
                                        <img src="{{ URL::asset('assets/images/marco1.jpg') }}" alt="Marco Polo Image" class="img-fluid rounded mt-3" width="85%">
                                        <div class="mask rgba-black-light"></div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <!--Mask color-->
                                    <div class="view">
                                        <img src="{{ URL::asset('assets/images/marco2.jpg') }}" alt="Marco Polo Image" class="img-fluid rounded mt-3" width="85%">
                                        <div class="mask rgba-black-light"></div>
                                    </div>
                                    {{--<div class="carousel-caption">
                                        <h3 class="h3-responsive">Slight mask</h3>
                                        <p>Third text</p>
                                    </div>--}}
                                </div>
                            </div>
                            <!--/.Slides-->
                        </div>
                        <!--/.Carousel Wrapper-->
                    </center>
                    <p class="text-center p-2 text-white mt-3">
                        Je suis Marco Polo, promoteur, manager et gérant. Actuellement gérant à miami 228.
                    </p>
                </div>
                <div class="pt-4 body">
                    @include('included.welcome')
                    @include('included.footer')
                </div>

            </div>
        </div>
    </section>

    <section class="d-block d-md-none">
        <div class="container-fluid">
            <div class="row">
                <!--Carousel Wrapper-->
                <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-2" data-slide-to="1"></li>
                        <li data-target="#carousel-example-2" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="view">
                                <img src="{{ URL::asset('assets/images/marco.jpg') }}" alt="Marco Polo Image" class="img-fluid rounded mt-3" width="100%">
                                <div class="mask rgba-black-light"></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view">
                                <img src="{{ URL::asset('assets/images/marco1.jpg') }}" alt="Marco Polo Image" class="img-fluid rounded mt-3" width="100%">
                                <div class="mask rgba-black-light"></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view">
                                <img src="{{ URL::asset('assets/images/marco2.jpg') }}" alt="Marco Polo Image" class="img-fluid rounded mt-3" width="100%">
                                <div class="mask rgba-black-light"></div>
                            </div>
                            {{--<div class="carousel-caption">
                                <h3 class="h3-responsive">Slight mask</h3>
                                <p>Third text</p>
                            </div>--}}
                        </div>
                    </div>
                    <!--/.Slides-->
                </div>
                <!--/.Carousel Wrapper-->
                <p class="text-center text-white p-2 mt-3 mt-auto" style="background-color: #001211">
                    Je suis Marco Polo, promoteur, manager et gérant. Actuellement gérant à miami 228.
                </p>
            </div>
            <div class="py-4 mt-0">
                @include('included.welcome')
            </div>
        </div>
        @include('included.footer')
    </section>
@endsection
