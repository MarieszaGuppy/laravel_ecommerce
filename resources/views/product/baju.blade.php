@extends('layouts.main')

@section('container')
    <div class="m-5">
        <h3 class="">Semua Kategori</h3>
        <div class="row">
            {{-- tampilan sidebar --}}
            <div class="col-md-3">
                <div class="p-3 bg-light border">
                    <h5 class="text-2xl">Sub Kategori</h5>
                    <form action="/action_page.php">
                        <div class="mb-2">
                            <input type="checkbox" id="panjang" name="panjang" value="panjang">
                            <label for="panjang"> Panjange</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2"> I have a car</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                            <label for="vehicle3"> I have a boat</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> I have a bike</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2"> I have a car</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                            <label for="vehicle3"> I have a boat</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> I have a bike</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2"> I have a car</label>
                        </div>
                        <div class="mb-2">
                            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                            <label for="vehicle3"> I have a boat</label>
                        </div>
                    </form>
                </div>
            </div>
            
            {{-- tampilan kanan/product --}}
            <div class="col-md-9">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="assets/product/baju/3.jpg" class="card-img-top" style="height: 500px; object-fit: cover;">
                        </div>
                        <div class="mb-5 d-flex py-4">
                            <button class="btn btn-success">semua baju</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="assets/product/hoodie/3.jpg" class="card-img-top" style="height: 500px; object-fit: cover;">
                        </div>
                        <div class="mb-5 d-flex py-4">
                            <button class="btn btn-success">semua hoodie</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="assets/product/sepatu/1.jpg" class="card-img-top" style="height: 500px; object-fit: cover;">
                        </div>
                        <div class="mb-5 d-flex py-4">
                            <button class="btn btn-success">semua baju</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="assets/product/topi/2.jpg" class="card-img-top" style="height: 500px; object-fit: cover;">
                        </div>
                        <div class="mb-5 d-flex py-4">
                            <button class="btn btn-success">semua baju</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="assets/product/baju/3.jpg" class="card-img-top" style="height: 500px; object-fit: cover;">
                        </div>
                        <div class="mb-5 d-flex py-4">
                            <button class="btn btn-success">semua baju</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="assets/product/baju/3.jpg" class="card-img-top" style="height: 500px; object-fit: cover;">
                        </div>
                        <div class="mb-5 d-flex py-4">
                            <button class="btn btn-success">semua baju</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection