@extends('layouts.main')


@section('container') 
<div class="container mt-4">
    <div class="card">
        <img src="{{ asset('images/'.$game->game_image) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $game->game_name }}</h5>
            <!-- Tambahkan informasi atau tombol lain sesuai kebutuhan -->
        </div>
    </div>
</div>
  <!-- Custom styles for this template -->
  <!-- <link href="checkout.css" rel="stylesheet"> -->
</head>
<body class="bg-body-tertiary">  
<div class="container">
<main>
  <div class="py-5 text-center">

    <h1>Checkout form</h1>
  </div>

  <div class="row g-5">
    <div class="col-md-5 col-lg-4 order-md-last border">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Informasi Topup</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-sm">
          <div>
            <h6 class="my-0">Top up {{ $game->game_name }} harga paling murah. Cara topup termurah :</h6>
            <small class="text-body-secondary">
              <ul>
                <li>
                  Pilih Category
                </li> 
                <li>
                  Pilih Nominal
                </li> 
                <li>
                  Masukkan Metode Pembayaran
                </li> 
                <li>
                  Tulis Kode Promo (jika ada)
                </li> 
                <li>
                  Klik Order Now & lakukan Pembayaran
                </li> 
                <li>
                  Topup otomatis masuk ke akun game
                </li> 
                
              </ul>
              </small>
          </div>
          <span class="text-body-secondary">$12</span>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <button type="submit" class="btn btn-secondary">Redeem</button>
        </div>
      </form>
    </div>
    
    <div class="col-md-7 col-lg-8">
      <h2 class="mb-3">Billing</h2>
      <form action="{{ route('process.topup') }}" method="post">
        @csrf
        <!-- Pilih Kategori Top-Up -->
        <label for="topup_category_id">Top-Up Category:</label>
        <select name="topup_category_id" id="topup_category_id">
            @foreach($topupCategories as $category)
                <option value="{{ $category->id }}">{{ $category->topup_cat_name }}</option>
            @endforeach
        </select>
    
        <!-- Pilih Nominal -->
        <label for="nominal_id">Nominal:</label>
        <select name="nominal_id" id="nominal_id">
            @foreach($nominals as $nominal)
                <option value="{{ $nominal->id }}">{{ $nominal->nominal }} - {{ $nominal->price }}</option>
            @endforeach
        </select>
    
        <!-- Pilih Metode Pembayaran -->
        <label for="payment_method_id">Payment Method:</label>
        <select name="payment_method_id" id="payment_method_id">
            @foreach($paymentMethods as $method)
                <option value="{{ $method->id }}">{{ $method->payment_name }}</option>
            @endforeach
        </select>
    
        <button type="submit">Top-Up</button>
    </form>
      {{-- <form class="needs-validation" novalidate>
        <div class="row g-3">
        <h4 class="mb-3">Category</h4>

        <div class="my-3">
          <div class="form-check">
            <input id="credit" name="topCat" type="radio" class="form-check-input" checked required>
            <label class="form-check-label" for="token">Token</label>
          </div>
        </div>

          <div class="col-12">
          <h4 class="mb-3">Nominal</h4>
            <div class="row d-flex flex-wrap gap-4">
              <div class="col-3 p-3 border rounded-full">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <a href="#" class="btn btn-primary">Button</a>
                </div>
              </div>
            </div>
          </div>

        <h4 class="mb-3">Payment</h4>

        <div class="my-3">
          <div class="form-check">
            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
            <label class="form-check-label" for="credit">Gopay</label>
          </div>
        </div>

        <button class="w-100 btn btn-primary btn-lg" type="submit">Order Now</button>
      </form> --}}
    </div>
  </div>
</main>

</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="checkout.js"></script></body>

@endsection