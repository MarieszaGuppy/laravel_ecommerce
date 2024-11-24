@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">

            <div class="col">
                <a href="/product/baju">
                    <div class="card">
                        <img src="assets/produk/baju/baju10.jpeg" class="card-img-top" style="height: 22rem; object-fit: cover;">
                        <div class="position-absolute d-flex justify-content-center align-items-end h-100 w-100"
                            style="background-color: rgba(0, 0, 0, 0.5)">
                            <h1 class="fw-bolder fs-1 text-light pb-5">C L <span style="color: #53ff5f;">O</span> T H E S</h1>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="/product/hoodie">
                    <div class="card">
                        <img src="assets/produk/hoodie/hoodie6.jpeg" class="card-img-top" style="height: 22rem; object-fit: cover;">
                        <div class="position-absolute d-flex justify-content-center align-items-end h-100 w-100"
                            style="background-color: rgba(0, 0, 0, 0.5)">
                            <h1 class="fw-bolder fs-1 text-light pb-5">H <span style="color: #53ff5f;">O O</span> D I E</h1>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="/product/sepatu">
                    <div class="card">
                        <img src="assets/produk/sepatu/shoes6.jpeg" class="card-img-top" style="height: 22rem; object-fit: cover;">
                        <div class="position-absolute d-flex justify-content-center align-items-end h-100 w-100"
                            style="background-color: rgba(0, 0, 0, 0.5)">
                            <h1 class="fw-bolder fs-1 text-light pb-5">S H <span style="color: #53ff5f;">O</span> E S</h1>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <a href="/product/topi">
                    <div class="card">
                        <img src="assets/produk/topi/hat5.jpeg" class="card-img-top" style="height: 22rem; object-fit: cover;">
                        <div class="position-absolute d-flex justify-content-center align-items-end h-100 w-100"
                            style="background-color: rgba(0, 0, 0, 0.5)">
                            <h1 class="fw-bolder fs-1 text-light pb-5">H <span style="color: #53ff5f;">A</span> T S</h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    @endsection
