@extends('layouts.main')

@section('container')

<div class="container py-5">
    <div class="row">
        <div class="col-md-7">
            <h2 class="mb-4">Pesanan Anda</h2>
            <hr>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/abouts/tim.jpg') }}" alt="Product" width="100" class="me-3">
                    <div>
                        <h6 class="m-0">Campos Superior Blend</h6>
                        <small>500g Whole Beans</small>
                    </div>
                </div>
                <span>$59.50</span>
            </div>
            <div class="d-flex justify-content-end align-items-center">
                <div class="input-group" style="width: 100px; margin-right:30px">
                    <button class="btn btn-outline-secondary btn-sm rounded">-</button>
                    <input type="text" class="form-control text-center" value="2">
                    <button class="btn btn-outline-secondary btn-sm rounded">+</button>
                </div>
                <button class="btn btn-sm"><box-icon type='solid' name='trash'></box-icon></button>
            </div>

            <h4 class="mt-5 mb-4">Halo Pelanggan</h4>
            <p>Tolong Masukkan email anda untuk melanjutkan pembayaran!</p>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Continue to Delivery</button>
            </form>
        </div>

        <div class="col-md-5">
            <div class="p-3 border rounded">
                <h4 class="mb-4">Tagihan Anda!</h4>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/abouts/tim.jpg') }}" alt="Product" width="100" class="me-3">
                        <div>
                            <h6 class="m-0">Campos Superior Blend</h6>
                            <small>500g Whole Beans</small>
                        </div>
                    </div>
                    <span>$59.50</span>
                </div>
                {{-- <div class="d-flex justify-content-between align-items-center">
                    <div class="input-group" style="width: 100px;">
                        <button class="btn btn-outline-secondary btn-sm">-</button>
                        <input type="text" class="form-control text-center" value="2">
                        <button class="btn btn-outline-secondary btn-sm">+</button>
                    </div>
                </div> --}}
                <hr>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="KODE PROMOSI">
                </div>
                <div class="d-flex justify-content-between">
                    <span>Total Harga</span>
                    <strong>$59.50</strong>
                </div>
                <div class="d-flex justify-content-between">
                    <span>Pajak</span>
                    <strong>$0.00</strong>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span> Jumlah Total</span>
                    <strong>$59.50</strong>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
