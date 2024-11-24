@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="text-center">
            <h1 class="fw-bold text-secondary">My <span style="color: #1bac25;">Favorite</span></h1>
        </div>

        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-4 my-5">

            @foreach ($products as $product)
                <div class="col">
                    <div class="card mb-3">
                        <img src="{{ asset('assets/produk/baju/' . $product->image) }}" class="card-img-top" alt="..."
                            style="object-position: center; object-fit: cover; height: 22rem;">
                        <div class="card-body">
                            <p class="card-title fw-semibold m-0" style="color:#23c92e;">{{ $product->kategori }}</p>
                            <h4 class="card-text pb-3">{{ $product->merek }}</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="m-0 fw-bold" style="letter-spacing: 2px;"><small>{{ $product->harga }} </small>
                                </p>
                                <div class="dropup-center">
                                    <a class="text-decoration-none text-black" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class='bx bx-dots-vertical-rounded fs-5'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Add To Cart</a></li>
                                        <li><a class="dropdown-item" href="#">Checkout</a></li>
                                        <li><a class="dropdown-item text-danger" href="#">Delete From Favorite</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
