@extends('layouts.main')

@section('container')

<div class="container py-5">
    <div class="row">
        <div class="col-md-7 mb-5">
            <h2 class="mb-4">Pesanan Anda</h2>
            <hr>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/produk/baju/baju1.jpeg') }}" alt="Product" width="100" class="me-3">
                    <div>
                        <h6 class="m-0">Tako Clothes</h6>
                        <small>XL Size</small>
                    </div>
                </div>
                <span>Rp.370.000</span>
            </div>
            <div class="d-flex justify-content-end align-items-center">
                <div class="input-group" style="width: 100px; margin-right:30px">
                    <button class="btn btn-outline-secondary btn-sm rounded">-</button>
                    <input type="text" class="form-control text-center" value="2">
                    <button class="btn btn-outline-secondary btn-sm rounded">+</button>
                </div>
                <button class="btn btn-sm"><box-icon type='solid' name='trash'></box-icon></button>
            </div>
        </div>

        <div class="col-md-5">
            <div class="p-3 border rounded">
                <h4 class="mb-4">Tagihan Anda!</h4>
                <hr>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="KODE PROMOSI">
                </div>
                <div class="d-flex justify-content-between">
                    <span>Total Harga</span>
                    <strong>Rp.370.000</strong>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Ongkir</span>
                    <strong>Rp.17.000</strong>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span> Jumlah Total</span>
                    <strong>Rp.387.000</strong>
                </div>
                <div class="mt-5">
                    <a href="" class="btn btn-success w-100">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
