<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bootstrap demo</title>
</head>

<body style="background-image: url('{{ asset('storage/images/Auth/image1.jpeg') }}');">


    <section class="vh-100" style="backdrop-filter: blur(4px); background-color: rgba(0, 0, 0, 0.2)">
        <div class="container py-3 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card border-0" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ asset('storage/images/Auth/image1.jpeg') }}" alt="login form"
                                    class="img-fluid"
                                    style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="" method="post">
                                        @csrf

                                        <div class="d-flex align-items-center pb-1">
                                            <h1 class="fw-bold mb-0">Logo</h1>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                            account</h5>

                                        @if (session('invalid'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ session('invalid') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="username" id="username" name="username"
                                                class="form-control border-2" value="{{ old('username') }}" autofocus>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="password">Password</label>
                                            <input type="password" id="password" name="password"
                                                class="form-control border-2">
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center pt-4 mb-3">
                                            <button class="btn btn-block text-white py-2 w-50" type="submit"
                                                style="background-color: #1bac25;">Login</button>
                                            <p class="text-secondary px-3 m-0">Or</p>
                                            <a href="/register"
                                                class="btn btn-block btn-secondary py-2 text-white w-50">Register</a>
                                        </div>

                                        <a class="small text-muted" href="#!">Forgot password?</a>

                                        <div class="gap-3 mt-5">
                                            <a href="#!" class="small text-muted">Terms of use.</a>
                                            <a href="#!" class="small text-muted px-3">Privacy policy</a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
