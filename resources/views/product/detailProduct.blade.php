@extends('layouts.main')

@section('container')
    {{-- @dd($product) --}}
    <section>
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0" src="{{ asset('assets/produk/' . $product->image) }}" alt="...">
                </div>
                <div class="col-md-6">

                    <h5 class="mb-1" style="color: #1bac25">{{ $product->kategori }}</h5>
                    <h1 class="display-5 fw-bolder">{{ $product->merek }}</h1>

                    <div class="fs-5 mb-5">
                        <span>{{ $product->harga }}</span>
                    </div>

                    <p class="lead">{{ $product->deskripsi }}</p>

                    <div class="my-4">
                        <h5>Size : </h5>
                        <div class="d-flex gap-3">
                            <div>
                                <input type="radio" id="size" name="size" value="size">
                                <label for="size"> S</label>
                            </div>
                            <div>
                                <input type="radio" id="size" name="size" value="size">
                                <label for="size"> M</label>
                            </div>
                            <div>
                                <input type="radio" id="size" name="size" value="size">
                                <label for="size"> L</label>
                            </div>
                            <div>
                                <input type="radio" id="size" name="size" value="size">
                                <label for="size"> XL</label>
                            </div>
                            <div>
                                <input type="radio" id="size" name="size" value="size">
                                <label for="size"> XXL</label>
                            </div>
                        </div>
                    </div>

                    <h5 class="mb-5">Stock : <small class="fw-normal">{{ $product->stok }}</small></h5>

                    <div class="d-flex gap-3">
                        <input class="form-control text-center" id="inputQuantity" type="number" value="1"
                            style="max-width: 4rem">
                        <button class="btn btn-success p-2" type="button">
                            <i class='bx bxs-cart text-white'></i>
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="container py-5">
            <h1 class="text-center fw-bold pb-4">Produk <span style="color: #1bac25">Lainnya</span></h1>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4">

                @if ($product->kategori == 'hoodie')
                    @foreach ($hoodie as $product)
                        <div class="col">
                            <a href="/product/{{ $product->slug }}" class="text-decoration-none">
                                <div class="card mb-3">
                                    <img src="{{ asset('assets/produk/' . $product->image) }}" class="card-img-top"
                                        alt="..." style="object-position: center; object-fit: cover; height: 20rem;">
                                    <div class="card-body">
                                        <p class="card-title fw-semibold m-0" style="color:#23c92e;">
                                            {{ $product->kategori }}</p>
                                        <h5 class="card-text pb-3">{{ $product->merek }}</h5>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="m-0 fw-bold" style="letter-spacing: 2px;">
                                                <small>{{ $product->harga }}
                                                </small></p>
                                            <div class="rounded-circle" style="background-color:#23c92e ">
                                                <i class='bx bx-cart-alt text-white fs-5 p-2'></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif

                @if ($product->kategori == 'baju')
                    @foreach ($baju as $product)
                        <div class="col">
                            <a href="/product/{{ $product->slug }}" class="text-decoration-none">
                                <div class="card mb-3">
                                    <img src="{{ asset('assets/produk/' . $product->image) }}" class="card-img-top"
                                        alt="..." style="object-position: center; object-fit: cover; height: 20rem;">
                                    <div class="card-body">
                                        <p class="card-title fw-semibold m-0" style="color:#23c92e;">
                                            {{ $product->kategori }}
                                        </p>
                                        <h5 class="card-text pb-3">{{ $product->merek }}</h5>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="m-0 fw-bold" style="letter-spacing: 2px;">
                                                <small>{{ $product->harga }}
                                                </small>
                                            </p>
                                            <div class="rounded-circle" style="background-color:#23c92e ">
                                                <i class='bx bx-cart-alt text-white fs-5 p-2'></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif

                @if ($product->kategori == 'topi')
                    @foreach ($topi as $product)
                        <div class="col">
                            <a href="/product/{{ $product->slug }}" class="text-decoration-none">
                                <div class="card mb-3">
                                    <img src="{{ asset('assets/produk/' . $product->image) }}" class="card-img-top"
                                        alt="..." style="object-position: center; object-fit: cover; height: 20rem;">
                                    <div class="card-body">
                                        <p class="card-title fw-semibold m-0" style="color:#23c92e;">
                                            {{ $product->kategori }}
                                        </p>
                                        <h5 class="card-text pb-3">{{ $product->merek }}</h5>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="m-0 fw-bold" style="letter-spacing: 2px;">
                                                <small>{{ $product->harga }}
                                                </small>
                                            </p>
                                            <div class="rounded-circle" style="background-color:#23c92e ">
                                                <i class='bx bx-cart-alt text-white fs-5 p-2'></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif

                @if ($product->kategori == 'sepatu')
                    @foreach ($sepatu as $product)
                        <div class="col">
                            <a href="/product/{{ $product->slug }}" class="text-decoration-none">
                                <div class="card mb-3">
                                    <img src="{{ asset('assets/produk/' . $product->image) }}" class="card-img-top"
                                        alt="..." style="object-position: center; object-fit: cover; height: 20rem;">
                                    <div class="card-body">
                                        <p class="card-title fw-semibold m-0" style="color:#23c92e;">
                                            {{ $product->kategori }}
                                        </p>
                                        <h5 class="card-text pb-3">{{ $product->merek }}</h5>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="m-0 fw-bold" style="letter-spacing: 2px;">
                                                <small>{{ $product->harga }}
                                                </small>
                                            </p>
                                            <div class="rounded-circle" style="background-color:#23c92e ">
                                                <i class='bx bx-cart-alt text-white fs-5 p-2'></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>

    </section>
@endsection
