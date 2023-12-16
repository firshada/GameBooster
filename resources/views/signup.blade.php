@extends('layouts.main')


@section('container')
<div class="container mt-4">
<div class="row justify-content-center mt-5">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Register</h1>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="John Doe" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="John123" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="0123456789" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="mb-3">
                        <div class="d-grid">
                            <button class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Custom styles for this template -->
<!-- <body class="py-4 bg-body-tertiary row">
<main class="form-signin col w-200 m-auto">

@if(Session::has('success'))
  <div class="alert alert-success" role="alert">
      {{ Session::get('success') }}
  </div>
@endif
<img class="mb-4 d-flex justify-content-center" src="images/gb.png" alt="" width="72" height="72">
<form action="{{ route('register') }}" method="POST" class="m-5">
  <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

  <div class="form-floating">
    <input type="name" class="form-control" name="name" id="floatingInput" placeholder="name">
    <label for="floatingInput">Name</label>
  </div>
  <div class="form-floating">
    <input type="username" class="form-control" name="username" id="floatingInput" placeholder="username">
    <label for="floatingInput">Username</label>
  </div>
  <div class="form-floating">
    <input type="string" class="form-control" name="phone" id="floatingInput" placeholder="0123456789">
    <label for="floatingInput">Phone Number</label>
  </div>
  <div class="form-floating">
    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Email Address</label>
  </div>
  <div class="form-floating">
    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Password</label>
  </div> -->

  <!-- <div class="form-check text-start my-3">
    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Remember me
    </label>
  </div> -->
  <!-- <button class="btn w-100 py-2 my-3 text-white" type="submit" style="background-color: #0B9BB4">Sign up</button>
  <p class="mt-2 text-body-secondary">already have an account?&nbsp;<a href="/signup" class="text-decoration-none" style="color: #0B9BB4;">Log in</a></p>
</form>
</main>
</body> -->

@endsection