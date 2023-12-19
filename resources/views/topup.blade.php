@extends('layouts.main')


@section('container')
<div class="container mt-4">
    <!-- Service -->
    <div class="services col">
        <h2 class="pt-4">Our Services</h2>
        <p>Enjoy Our Services</p>
        {{-- <div class="row">
            @foreach ( $data['games'] as $g)   
            <div class="col-md-3 d-flex justify-content-center py-3">
                <div class="card d-flex justify-content-center" style="width: 240px;">
                    <img src="{{ asset('images/'. $g->game_image) }}" class="card-img-top" style="padding: 10px 10px; object-fit: cover" alt="...">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center">{{ $g->game_name }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div> --}}
        <div class="row">
            @foreach ($data['games'] as $g)   
                <div class="col-md-3 d-flex justify-content-center py-3" data-aos="fade-up" data-aos-duration="500" data-aos-offset="500">
                    <div class="card d-flex justify-content-center" style="width: 240px;">
                        <a href="{{ route('game.detail', $g->id) }}" class="text-black" style="text-decoration: none;">
                            <img src="{{ asset('images/'.$g->game_image) }}" class="card-img-top" style="padding: 10px 10px; object-fit: cover" alt="...">
                            <div class="card-body">
                                <h5 class="card-title d-flex justify-content-center">{{ $g->game_name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
