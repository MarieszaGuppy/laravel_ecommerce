<nav class="navbar navbar-expand-lg px-3 py-3 sticky-top"
    style="box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.1); background-color: #1bac25">
    <div class="container-fluid">
        <a class="navbar-brand pe-4 text-white" href="{{ route('home') }}">ICON</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-1 ">
                <li class="nav-item dropdown-center">

                    <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        Koleksi Baru
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item fw-bold" href="#">Toko x Demon Slayer</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Toko x Pokemon</a></li>
                        <li><a class="dropdown-item fw-bold" href="#">Toko x BMTH</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown-center">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Produk
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="product">Kategori</a></li>
                        <li><a class="dropdown-item fw-semibold" href="#">Baju</a></li>
                        <li><a class="dropdown-item fw-semibold" href="#">Hoodie</a></li>
                        <li><a class="dropdown-item fw-semibold" href="#">Topi</a></li>
                        <li><a class="dropdown-item fw-semibold" href="#">Sepatu</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="{{ url('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="{{ url('about') }}">About</a>
                </li>
                <li>
                    <a class="nav-link text-white" aria-current="page" href="{{ url('contact') }}">Contact</a>
                </li>
            </ul>
            <div class="d-flex gap-3">
                @if (Auth::check())
                    <a href="" class="text-decoration-none text-white"><box-icon name='star'
                            color='#ffffff'></box-icon></a>
                    <a href="" class="text-decoration-none text-white"><box-icon name='shopping-bag'
                            color='#ffffff'></box-icon></a>
                    <a href="" class="text-decoration-none text-white"><box-icon name='user'
                            color='#ffffff'></box-icon></a>
                @else
                    <a href="" class="text-decoration-none fw-bold text-white">Sign in</a>
                @endif
            </div>
        </div>
    </div>
</nav>
