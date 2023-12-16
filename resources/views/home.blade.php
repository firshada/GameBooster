@extends('layouts.main')


@section('container')
<div class="container mt-4">
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/caro1.jpg" alt="Valorant" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="images/caro2.jpg" alt="Mobile Legend" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="images/caro3.jpg" alt="PUBG" class="d-block w-100">
            </div>
        </div>
    </div>

    <!-- topgame -->
    <div class="container row">
        <h2 class="pt-4 ">Top Game!</h2>
        <p>Our Best offer</p>

        @foreach ( $top_games as $tg)
        <section class="mx-auto" style="max-width: 23rem;">
            <div class="card p-4">
              <div class="card-body d-flex flex-row">
                <img src="images/gb.png" class="rounded-circle me-3" height="50px"
                  width="50px" alt="avatar" />
                <div>
                  <h5 class="card-title font-weight-bold mb-2 d-flex justify-content-center">{{ $tg->game_name }}</h5>
                  <p class="card-text"><i class="far fa-clock pe-2"></i>{{ $tg->developer }}</p>
                </div>
              </div>
              <div class="bg-image hover-overlay ripple rounded-0 d-flex justify-content-center" data-mdb-ripple-color="light">
                <img class="img-fluid" src="{{ asset('images/'.$tg->game_image) }}"
                  alt="Card image cap" style="width: 23rem;"/>
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
            </div>
          </section>
        @endforeach
    </div>

    <!-- Service -->
    <div class="services col">
        <h2 class="pt-4">Our Services</h2>
        <p>Enjoy Our Services</p>
        <div class="row">
            @foreach ( $games as $g)   
            <div class="col-md-3 d-flex justify-content-center py-3">
                <div class="card d-flex justify-content-center" style="width: 240px;">
                    <img src="{{ asset('images/'.$g->game_image) }}" class="card-img-top" style="padding: 10px 10px; object-fit: cover" alt="...">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">{{ $g->game_name }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    <!-- News -->
    <div class="news col">
        <h2 class="pt-4">News</h2>
        <p class="pb-3">Hot news about new games and update</p>
        
        <div class="container row gx-5">
            @foreach ( $news as $n )   
            <div class="col-md-6 mb-4">
                <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                <img src="{{ asset('images/'.$n->photo) }}" class="img-fluid" />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">{{ $n->date }}</span>
                <h4><strong>{{ $n->title }}</strong></h4>
                <p class="text-muted">{{ $n->description }}</p>
                <button type="button" class="btn btn-primary">Read more</button>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
