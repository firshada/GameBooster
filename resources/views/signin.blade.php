@extends('layouts.main')

@section('container')

</head>

<body class="py-4 bg-body-tertiary h-auto">
    <main class="form-signin d-flex justify-content-center w-200 m-auto">
        <form class="m-5">
            <img class="mb-4 d-flex justify-content-center" src="images/gb.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 fw-normal">Please log in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
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

</html>
@endsection
