@extends('layouts.main')

@section('container')
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

        <section class="mx-auto" style="max-width: 23rem;">
          <div class="card">
            <div class="card-body d-flex flex-row">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg" class="rounded-circle me-3" height="50px"
                width="50px" alt="avatar" />
              <div>
                <h5 class="card-title font-weight-bold mb-2">New spicy meals</h5>
                <p class="card-text"><i class="far fa-clock pe-2"></i>07/24/2018</p>
              </div>
            </div>
            <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
              <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/full page/2.jpg"
                alt="Card image cap" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>
        </section>

        <section class="mx-auto" style="max-width: 23rem;">
          <div class="card">
            <div class="card-body d-flex flex-row">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg" class="rounded-circle me-3" height="50px"
                width="50px" alt="avatar" />
              <div>
                <h5 class="card-title font-weight-bold mb-2">New spicy meals</h5>
                <p class="card-text"><i class="far fa-clock pe-2"></i>07/24/2018</p>
              </div>
            </div>
            <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
              <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/full page/2.jpg"
                alt="Card image cap" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>
        </section>

        <section class="mx-auto" style="max-width: 23rem;">
          <div class="card">
            <div class="card-body d-flex flex-row">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg" class="rounded-circle me-3" height="50px"
                width="50px" alt="avatar" />
              <div>
                <h5 class="card-title font-weight-bold mb-2">New spicy meals</h5>
                <p class="card-text"><i class="far fa-clock pe-2"></i>07/24/2018</p>
              </div>
            </div>
            <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
              <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/full page/2.jpg"
                alt="Card image cap" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>
        </section>
      </div>

    <!-- Service -->
    <div class="services col">
        <h2 class="pt-4">Our Services</h2>
        <p>Enjoy Our Services</p>
        <div class="row d-flex justify-content-center gap-4 pt-4">
            <div class="card d-flex justify-content-center" style="width: 230px;">
                <img src="images/serv1.png" class="card-img-top" style="padding-top: 10px;" alt="...">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Valorant</h5>
                </div>
            </div>
            <div class="card d-flex justify-content-center" style="width: 230px;">
                <img src="images/serv2.png" class="card-img-top" style="padding-top: 10px;" alt="...">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Mobile Legends</h5>
                </div>
            </div>
            <div class="card d-flex justify-content-center" style="width: 230px;">
                <img src="images/serv3.png" class="card-img-top" style="padding-top: 10px;" alt="...">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">EA FC</h5>
                </div>
            </div>
            <div class="card d-flex justify-content-center" style="width: 230px;">
                <img src="images/serv4.png" class="card-img-top" style="padding-top: 10px;" alt="...">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Free Fire</h5>
                </div>
            </div>
            <div class="card d-flex justify-content-center" style="width: 230px;">
                <img src="images/serv5.png" class="card-img-top" style="padding-top: 10px;" alt="...">
                    <div class="card-body">
                <h5 class="card-title d-flex justify-content-center">COD</h5>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center gap-4 pt-4">
            <div class="card d-flex justify-content-center" style="width: 230px;">
                <img src="images/serv6.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Game Name</h5>
                </div>
            </div>
            <div class="card d-flex justify-content-center" style="width: 230px;">
                <img src="{{ URL('image/serv7.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Game Name</h5>
                </div>
            </div>
            <div class="card d-flex justify-content-center" style="width: 230px;">
                <img src="{{ URL('image/serv8.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Game Name</h5>
                </div>
            </div>
            <div class="card d-flex justify-content-center" style="width: 230px;">
                <img src="{{ URL('image/serv9.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Game Name</h5>
                </div>
            </div>
            <div class="card d-flex justify-content-center" style="width: 230px;">
                <img src="{{ URL('image/serv10.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Game Name</h5>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center gap-4 pt-4">
            <div class="card d-flex justify-content-center" style="width: 230px;">
                <img src="{{ URL('image/serv11.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Game Name</h5>
                </div>
            </div>
            <div class="card d-flex justify-content-center" style="width: 230px;">
                <img src="{{ URL('image/serv12.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Game Name</h5>
                </div>
            </div>
            <div class="card d-flex justify-content-center" style="width: 230px;">
                <img src="{{ URL('image/serv13.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Game Name</h5>
                </div>
            </div>
            <div class="card d-flex justify-content-center" style="width: 230px;">
                <img src="{{ URL('image/serv14.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Game Name</h5>
                </div>
            </div>
            <div class="card d-flex justify-content-center" style="width: 230px;">
                <img src="{{ URL('image/serv15.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title d-flex justify-content-center">Game Name</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- News -->
    <div class="news pt-4">
        <h2>News</h2>
        <p class="pb-3">Hot news about new games and update</p>
        
        <div class="container row gx-5">
            <div class="col-md-6 mb-4">
                <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                <img src="images/news1.jpg" class="img-fluid" />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span>
                <h4><strong>Facilis consequatur eligendi</strong></h4>
                <p class="text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
                sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
                </p>
                <button type="button" class="btn btn-primary">Read more</button>
            </div>
        </div>

        <div class="container row gx-5">
            <div class="col-md-6 mb-4">
                <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                <img src="images/news1.jpg" class="img-fluid" />
                <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span>
                <h4><strong>Facilis consequatur eligendi</strong></h4>
                <p class="text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis consequatur
                eligendi quisquam doloremque vero ex debitis veritatis placeat unde animi laborum
                sapiente illo possimus, commodi dignissimos obcaecati illum maiores corporis.
                </p>
                <button type="button" class="btn btn-primary">Read more</button>
            </div>
        </div>
    </div>

@endsection