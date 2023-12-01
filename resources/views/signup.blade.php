@extends('layouts.main')


@section('container')
<!-- Custom styles for this template -->
<body class="py-4 bg-body-tertiary row">
<main class="form-signin col w-200 m-auto">
<!-- d-flex justify-content-center -->
<img class="mb-4 d-flex justify-content-center" src="images/gb.png" alt="" width="72" height="72">
<form class="m-5">
  <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

  <div class="form-floating">
    <input type="name" class="form-control" id="floatingInput" placeholder="name">
    <label for="floatingInput">Name</label>
  </div>
  <div class="form-floating">
    <input type="username" class="form-control" id="floatingInput" placeholder="username">
    <label for="floatingInput">Username</label>
  </div>
  <div class="form-floating">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Email address</label>
  </div>
  <div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Password</label>
  </div>
  <div class="form-floating">
    <input type="cpassword" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">Confirm Password</label>
  </div>

  <!-- <div class="form-check text-start my-3">
    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
      Remember me
    </label>
  </div> -->
  <button class="btn w-100 py-2 my-3 text-white" type="submit" style="background-color: #0B9BB4">Sign up</button>
  <p class="mt-2 text-body-secondary">already have an account?&nbsp;<a href="/signup" class="text-decoration-none" style="color: #0B9BB4;">Log in</a></p>
</form>
</main>
</body>

@endsection