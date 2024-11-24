@extends('layouts.main')

@section('container')
    <div class="m-4">
        <div class="row">
            {{-- tampilan sidebar --}}
            <div class="col-md-3 mb-5   ">
                <div class="p-3 bg-light border">
                    <form action="/action_page.php">
                        <h5 class="text-2xl">Size</h5>
                        <div>
                            <input type="checkbox" id="size" name="size" value="size">
                            <label for="size"> S</label>
                        </div>
                        <div>
                            <input type="checkbox" id="size" name="size" value="size">
                            <label for="size"> M</label>
                        </div>
                        <div>
                            <input type="checkbox" id="size" name="size" value="size">
                            <label for="size"> L</label>
                        </div>
                        <div>
                            <input type="checkbox" id="size" name="size" value="size">
                            <label for="size"> XL</label>
                        </div>
                        <div>
                            <input type="checkbox" id="size" name="size" value="size">
                            <label for="size"> XXL</label>
                        </div>
                        <h5 class="text-2xl pt-2">Price</h5>
                        <div class="mb-1">
                            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                            <label for="vehicle3"> Rp.100.000 - 200.000</label>
                        </div>
                        <div class="mb-1">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> Rp.200.000 - 500.000</label>
                        </div>
                        <div class="mb-1">
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2"> Rp.500.000 - 800.000</label>
                        </div>
                    </form>
                </div>
            </div>

            {{-- tampilan kanan/product --}}
            <div class="col-md-9">


                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4">

                    @foreach ($products as $product)
                        <div class="col">
                            <div class="card mb-3">
                                <img src="{{ asset('assets/produk/hoodie/' . $product->image) }}" class="card-img-top"
                                    alt="..." style="object-position: center; object-fit: cover; height: 20rem;">
                                <div class="card-body">
                                    <p class="card-title fw-semibold m-0" style="color:#23c92e;">{{ $product->kategori }}
                                    </p>
                                    <h5 class="card-text pt-1 pb-3">{{ $product->merek }}</h5>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="m-0 fw-bold" style="letter-spacing: 2px;"><small>{{ $product->harga }}
                                            </small></p>
                                        <div class="rounded-circle" style="background-color:#23c92e ">
                                            <i class='bx bx-cart-alt text-white fs-5 p-2' ></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
