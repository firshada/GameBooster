@extends('layouts.main')

@section('container')
<div class="container mt-4">
<div class="row justify-content-center mt-5">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Login</h1>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif    
                @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                @endif
                <form action="{{ route('login') }}" method="POST">
                    @csrf
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
                            <button class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
{{-- </head>

<body class="py-4 bg-body-tertiary h-auto">
    <main class="form-signin d-flex flex-col justify-content-center w-200 m-auto">
        @if(Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
        @endif
        <form class="m-5" action="{{ route('login') }}" method="POST">
            @csrf
            <img class="mb-4 d-flex justify-content-center" src="images/gb.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 fw-normal">Please log in</h1>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
            </div>

            <button class="btn w-100 py-2 text-white" type="submit" style="background-color: #0B9BB4">Log in</button>
            <p class="mt-2 text-body-secondary">Don't have an account?&nbsp;<a href="#" class="text-decoration-none" style="color: #0B9BB4;">Sign Up</a></p>
        </form>
    </main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> --}}
@endsection
