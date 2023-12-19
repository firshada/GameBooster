

@extends('layouts.main')

@section('container') 
<div class="container mt-4">
    {{-- Banner --}}
    <div class="card text">
        <!-- <img src="images/caro1.jpg" class="card-img" alt="..."> -->
        <img src="{{ asset('images/' . $news->photo) }}" class="card-img" alt="...">
        <div class="card-img-overlay align-items-center" style="align-items: center">
          <h5 class="card-title"></h5>
          <p class="card-text"></p>
          <p class="card-text"><small></small></p>
        </div>
    </div>

    <div class="card text mt-5" style="border:none">
        {{-- <!-- <img src="{{ asset('images/' . $news->photo) }}" class="card-img" alt="..."> --> --}}
        <div class="align-items-center" data-aos="fade-down" data-aos-offset="900" data-aos-duration="1850" style="align-items: center">
            <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">{{ $news->date }}</span>
            <h2 class="card-title d-flex justify-content-center text-center">{{ $news->title }}</h2>
            {!! $news->longDescription !!} 
        </div> 
    </div>





</div>
@endsection