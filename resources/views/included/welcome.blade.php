<div class="container text-white text-justify" style="background-color: #001211">
    @if(count($events) != 0)
        <div class="d-inline-flex">
            <p class="bg-warning text-white px-5 py-2 "><i class="fa fa-info-circle"></i> Actualités</p>
        </div>
        <div class="row mb-3 uk-child-width-1-2@m uk-grid-match">
            @foreach($events as $event)
            <div class="col-12 col-md-6" uk-scrollspy="cls: uk-animation-slide-bottom; delay: 300; repeat: false">
                <!-- Card -->
                <div class="card">
                    <!-- Card image -->
                    <img class="card-img-top" src="{{ URL::asset('storage/'.$event->image) }}" alt="Card image cap">
                </div>
                <!-- Card -->
                <div class="card-body text-justify">

                    <!-- Title -->
                    <h4 class="card-title text-white h3-responsive"><a>{{ $event->name }}</a></h4>
                    <!-- Text -->
                    <p class="card-text">
                        <span> Date : {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</span><br><br>
                        <span> Heure : {{ substr($event->hour, 0, 2). ' h '. substr($event->hour, 3) }}</span><br><br>
                        <span> Lieu : {{ $event->lieu }}</span><br><br>
                        @if($event->dressCode != null)
                            <span> Dress code : {{ $event->dressCode }}</span><br><br>
                        @endif
                        @if($event->artist != null)
                            <span> Dress code : {{ $event->artist }}</span><br><br>
                        @endif
                        @if($event->discJockey != null)
                            <span> Dress code : {{ $event->discJockey }}</span><br><br>
                        @endif
                        <span> Entrée : {{ $event->entry == null ? 'Libre et gratuite' : $event->entry.' FCFA' }}</span><br>

                    </p>
                    <a href="https://wa.me/22891019245" class="btn btn-warning text-uppercase btn-block"> Reserver</a>
                </div>
            </div>
            @endforeach
        </div>
    @endif
    <div class="row mb-3">
        <div class="col-12">
            <!-- Card -->
            <div class="card">
                <!-- Card image -->
                @foreach($couvertures as $couverture)
                    <img class="card-img-top" src="{{ URL::asset('storage/'.$couverture->image) }}" alt="Card image cap">
                @endforeach
            </div>
            <!-- Card -->
            <p class="text-justify py-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium, eaque labore libero magni minus modi porro quisquam ratione similique! Dignissimos in incidunt magni modi molestiae nostrum recusandae sed veniam!
            </p>
        </div>
    </div>
    <div class="row mb-3" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 200;">
        @foreach($fades as $fade)
            <div class="col-6 mb-4">
                <!-- Card -->
                <div class="card">
                    <!-- Card image -->
                    <img class="card-img-top" src="{{ URL::asset('storage/'.$fade->image) }}" alt="Card image cap">
                </div>
                <!-- Card -->
            </div>
        @endforeach

    </div>
</div>
