<div class="container text-white text-justify" style="background-color: #001211">
    <div class="d-inline-flex">
        <p class="bg-warning text-white px-5 py-2 "><i class="fa fa-info-circle"></i> Actualités</p>
    </div>
    <div class="row mb-3 uk-child-width-1-2@m uk-grid-match">
        <div class="col-12 col-md-6" uk-scrollspy="cls: uk-animation-slide-top; delay: 400; repeat: true">
            <!-- Card -->
            <div class="card">
                <!-- Card image -->
                <img class="card-img-top" src="{{ URL::asset('assets/images/4.jpg') }}" alt="Card image cap">
            </div>
            <!-- Card -->
            <div class="card-body text-justify">

                <!-- Title -->
                <h4 class="card-title text-white h3-responsive"><a>La nuit des amoureux</a></h4>
                <!-- Text -->
                <p class="card-text">
                    <span><i class="fa fa-calendar"></i> Date : 14 Février 2020</span><br>
                    <span><i class="fa fa-clock"></i> Heure : 20:00 - 22:00</span><br>
                    <span><i class="fa fa-tshirt"></i> Dress code : Rouge et blanc</span><br>
                </p>
                <a href="#" class="btn btn-warning text-uppercase"> Voir plus >></a>
            </div>
        </div>
        <div class="col-12 col-md-6" uk-scrollspy="cls: uk-animation-slide-bottom; delay: 400; repeat: true">
            <!-- Card -->
            <div class="card">
                <!-- Card image -->
                <img class="card-img-top" src="{{ URL::asset('assets/images/3.jpg') }}" alt="Card image cap">
            </div>
            <!-- Card -->
            <div class="card-body">

                <!-- Title -->
                <h4 class="card-title text-justify text-white h3-responsive"><a>La nuit blanche</a></h4>
                <!-- Text -->
                <p class="card-text">
                    <span><i class="fa fa-calendar"></i> Date : 14 Février 2020</span><br>
                    <span><i class="fa fa-clock"></i> Heure : 20:00 - 22:00</span><br>
                    <span><i class="fa fa-tshirt"></i> Dress code : Blanc</span><br>
                </p>
                <a href="#" class="btn btn-warning text-uppercase"> Voir plus >></a>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12">
            <!-- Card -->
            <div class="card">
                <!-- Card image -->
                <img class="card-img-top" src="{{ URL::asset('assets/images/0.jpg') }}" alt="Card image cap">
            </div>
            <!-- Card -->
            <p class="text-justify py-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium, eaque labore libero magni minus modi porro quisquam ratione similique! Dignissimos in incidunt magni modi molestiae nostrum recusandae sed veniam!
            </p>
        </div>
    </div>
    <div class="row mb-3" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 400;">
        <div class="col-6">
            <!-- Card -->
            <div class="card">
                <!-- Card image -->
                <img class="card-img-top" src="{{ URL::asset('assets/images/4.jpg') }}" alt="Card image cap">
            </div>
            <!-- Card -->
        </div>
        <div class="col-6">
            <!-- Card -->
            <div class="card">
                <!-- Card image -->
                <img class="card-img-top" src="{{ URL::asset('assets/images/3.jpg') }}" alt="Card image cap">
            </div>
            <!-- Card -->
        </div>
    </div>
    <div class="row mb-4" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 400;">
        <div class="col-6">
            <!-- Card -->
            <div class="card">
                <!-- Card image -->
                <img class="card-img-top" src="{{ URL::asset('assets/images/2.jpg') }}" alt="Card image cap">
            </div>
            <!-- Card -->
        </div>
        <div class="col-6">
            <!-- Card -->
            <div class="card">
                <!-- Card image -->
                <img class="card-img-top" src="{{ URL::asset('assets/images/0.jpg') }}" alt="Card image cap">
            </div>
            <!-- Card -->
        </div>
    </div>
</div>
