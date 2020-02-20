@extends('layouts.app')

@section('style')
    <style>
        .Comfortaa {
            font-family: Comfortaa;
        }

        @font-face {
            font-family: Comfortaa;
            src: url(../fonts/Comfortaa-VariableFont_wght.ttf);
        }

        .cover {
            background-image: url("{{ URL::asset('assets/images/3.jpg') }}");
            background-repeat: no-repeat;
            background-size: cover;
            height: 35rem;
            margin-top: auto;
        }

    </style>
@endsection

@section('content')
    <div class="container Comfortaa mb-0" style="background-color: #001211;">
        <div style="padding-top: 4.5rem;">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-dark">
                    <li class="breadcrumb-item text-white">Accueil</li>
                    <li class="breadcrumb-item text-warning"><a href="#" class="text-decoration-none text-warning">Evénements</a></li>
                    <li class="breadcrumb-item text-warning active"><a href="#" class="text-decoration-none text-warning">Soirées</a></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-12">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 7:3; animation: fade; autoplay: true; autoplay-interval: 6000;">

                    <ul class="uk-slideshow-items">
                        <li>
                            <img src="{{ URL::asset('assets/images/4.jpg') }}" alt="" >
                        </li>
                        <li>
                            <img src="{{ URL::asset('assets/images/2.jpg') }}" alt="" >
                        </li>
                        <li>
                            <img src="{{ URL::asset('assets/images/3.jpg') }}" alt="" >
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                    <ul class="uk-slider-nav uk-dotnav"></ul>
                </div>
            </div>
        </div>

    </div>

    <div class="container Comfortaa mb-3" style="background-color: #001211;">
        <div class="row presentation">
            <p class="text-white text-justify px-4 px-md-0">
                Miami 228, le night Club le plus branché de la capitale. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor dolorem, doloremque dolorum excepturi expedita, impedit incidunt iste itaque laboriosam placeat qui quod sint ullam voluptatibus. Est libero optio veritatis.
                Il est ouvert chaque soir à partir de 22h00 à l'aube.
            </p>
        </div>
        <div class="d-inline-flex">
            <p class="bg-warning text-white px-5 py-2 ">Evénements</p>
        </div>
       <div class="row events">
           <div class="col-12 col-md-6">
               <div class="card">
                   <!-- Card image -->
                   <img class="card-img-top" src="{{ URL::asset('assets/images/4.jpg') }}" alt="Card image cap">
               </div>
               <!-- Card -->
               <div class="card-body bg-dark text-justify">

                   <!-- Title -->
                   <h4 class="card-title text-white h3-responsive"><a>La nuit des amoureux</a></h4>
                   <!-- Text -->
                   <p class="card-text text-white">
                       <span><i class="fa fa-calendar"></i> Date : 14 Février 2020</span><br><br>
                       <span><i class="fa fa-clock"></i> Heure : 20:00 - 22:00</span><br><br>
                       <span><i class="fa fa-tshirt"></i> Dress code : Rouge et blanc</span><br>
                   </p>
                   <a href="https://wa.me/22891019245" class="btn btn-warning text-uppercase btn-block reserver"> Reserver</a>
               </div>
           </div>
           <div class="col-12 col-md-6">
               <div class="card">
                   <!-- Card image -->
                   <img class="card-img-top" src="{{ URL::asset('assets/images/4.jpg') }}" alt="Card image cap">
               </div>
               <!-- Card -->
               <div class="card-body bg-dark text-justify">

                   <!-- Title -->
                   <h4 class="card-title text-white h3-responsive"><a>La nuit des amoureux</a></h4>
                   <!-- Text -->
                   <p class="card-text text-white">
                       <span><i class="fa fa-calendar"></i> Date : 14 Février 2020</span><br><br>
                       <span><i class="fa fa-clock"></i> Heure : 20:00 - 22:00</span><br><br>
                       <span><i class="fa fa-tshirt"></i> Dress code : Rouge et blanc</span><br>
                   </p>
                   <a href="https://wa.me/22891019245" class="btn btn-warning text-uppercase reserver btn-block"> Reserver</a>
               </div>
           </div>
       </div>
        <div class="d-inline-flex mt-4">
            <p class="bg-warning text-white px-5 py-2 ">Soirées</p>
        </div>
        <div class="row events mb-4">
            <div class="col">
                <video controls>
                    <source src="{{ URL::asset('assets/videos/videomi1.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="col">
                <img class="card-img-top" src="{{ URL::asset('assets/images/0.jpg') }}" alt="Card image cap">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3335.4061111059805!2d1.1770249068584147!3d6.199075866740236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1021590b627db4df%3A0x1e873b3ed50f4f8e!2sMiami%20228!5e0!3m2!1sfr!2stg!4v1582152772946!5m2!1sfr!2stg" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>

    @include('included.footer')
@endsection
