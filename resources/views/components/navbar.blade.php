<nav class="navbar navbar-expand-lg px-3 py-3 fixed-top"
    style="box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.1); background-color: #23a548">
    <div class="container-fluid">
        <a class="navbar-brand pe-4 text-white" href="{{ route('home') }}">ICON</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-1 ">
                <li class="nav-item dropdown-center">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        New Collection
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item fw-bold" href="{{ route('home') }}">Toko x Demon Slayer</a></li>
                        <li><a class="dropdown-item fw-bold" href="{{ route('home') }}">Toko x Pokemon</a></li>
                        <li><a class="dropdown-item fw-bold" href="{{ route('home') }}">Toko x BMTH</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown-center">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Product
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item fw-semibold" href="/product/baju">Baju</a></li>
                        <li><a class="dropdown-item fw-semibold" href="/product/hoodie">Hoodie</a></li>
                        <li><a class="dropdown-item fw-semibold" href="/product/topi">Topi</a></li>
                        <li><a class="dropdown-item fw-semibold" href="/product/sepatu">Sepatu</a></li>
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
            <div class="d-flex align-items-center gap-3">
                @if (Auth::check())
                    <a href="/favorite" class="nav-icon text-decoration-none text-white"><box-icon name='star'
                            color='#ffffff'></box-icon></a>
                    <a href="/checkout" class="nav-icon text-decoration-none text-white"><box-icon name='shopping-bag'
                            color='#ffffff'></box-icon></a>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item dropdown-center me-3">
                            <a class="dropdown-toggle text-decoration-none text-white d-flex align-items-center"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-white" style="width: 2.5rem; height: 2.5rem;">
                                        @if (Auth::user()->image)
                                            <img src="{{ asset('assets/profile/' . Auth::user()->image) }}"
                                                alt="" class="img-fluid border border-white rounded-circle"
                                                style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                                        @else
                                            <img src="{{ asset('assets/profile/user.png') }}" alt=""
                                                class="img-fluid border border-white rounded-circle bg-white"
                                                style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                                        @endif
                                    </div>
                                    <h6 class="m-0 ps-2">{{ auth()->user()->username }}</h6>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('profile') }}"><i
                                            class='bx bx-user fw-semibold fs-5'></i>
                                        Profil</a></li>
                                <li class="nav-links"><a class="dropdown-item" href="{{ route('favorite') }}"><i
                                            class='bx bx-star fw-semibold fs-5'></i>
                                        Favorite</a>
                                </li>
                                <li class="nav-links"><a class="dropdown-item" href="{{ route('checkout') }}"><i
                                            class='bx bx-shopping-bag fw-semibold fs-5'></i> Shopping Bag</a>
                                </li>
                                <li class="nav-links">
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/logout"><i
                                            class='bx bx-log-out fw-semibold fs-5'></i>
                                        Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                @else
                    <a href="/login" class="text-decoration-none fw-bold text-white">Sign in</a>
                @endif
            </div>
        </div>
    </div>
</nav>
