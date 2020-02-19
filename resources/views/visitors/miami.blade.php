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
    <div class="cover mb-3"></div>
    <div class="container Comfortaa mb-3" style="background-color: #001211;">
        <div class="row presentation">
            <p class="text-white text-justify">
                Miami 228, le night Club le plus branché de la capitale. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dolor dolorem, doloremque dolorum excepturi expedita, impedit incidunt iste itaque laboriosam placeat qui quod sint ullam voluptatibus. Est libero optio veritatis.
                Il est ouvert chaque soir à partir de 22h00 à l'aube.
            </p>
        </div>
        <div class="d-inline-flex">
            <p class="bg-warning text-white px-5 py-2 ">Evénements</p>
        </div>
       <div class="row events">
           <div class="col">
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
                       <span><i class="fa fa-calendar"></i> Date : 14 Février 2020</span><br>
                       <span><i class="fa fa-clock"></i> Heure : 20:00 - 22:00</span><br>
                       <span><i class="fa fa-tshirt"></i> Dress code : Rouge et blanc</span><br>
                   </p>
                   <a href="#" class="btn btn-warning text-uppercase btn-block"> Reserver</a>
               </div>
           </div>
           <div class="col">
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
                       <span><i class="fa fa-calendar"></i> Date : 14 Février 2020</span><br>
                       <span><i class="fa fa-clock"></i> Heure : 20:00 - 22:00</span><br>
                       <span><i class="fa fa-tshirt"></i> Dress code : Rouge et blanc</span><br>
                   </p>
                   <a href="#" class="btn btn-warning text-uppercase btn-block"> Reserver</a>
               </div>
           </div>
       </div>
        <div class="d-inline-flex mt-4">
            <p class="bg-warning text-white px-5 py-2 ">Soirées</p>
        </div>
        <div class="row events">
            <div class="col">
                <video controls>
                    <source src="{{ URL::asset('assets/videos/videomi1.mp4') }}" type="video/mp4">
                </video>
            </div>
            <div class="col">
                <img class="card-img-top" src="{{ URL::asset('assets/images/0.jpg') }}" alt="Card image cap">
            </div>
        </div>
    </div>

    @include('included.footer')
@endsection
