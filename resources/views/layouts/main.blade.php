<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <style>
        .nav-links {
            display: none;
        }

        @media(max-width: 1000px) {
            .nav-icon {
                display: none;
            }

            .nav-links {
                display: block;
            }
        }
    </style>
    @yield('header')
    {{-- @vite(['resources/js/app.js']) --}}
</head>

{{-- tess --}}

<body>

    @include('components.navbar')

    @if (session('login'))
        <div class="alert alert-success alert-dismissible fade show mx-2" style="margin-top: 5rem" role="alert">
            {{ session('login') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('logout'))
        <div class="alert alert-danger alert-dismissible fade show mx-2" style="margin-top: 5rem" role="alert">
            {{ session('logout') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div style="margin-top: 7rem;">
        @yield('container')
    </div>

    <div style="background-color: #23a548" data-bs-theme="white">
        @include('components.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
