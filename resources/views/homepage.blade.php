@extends('layouts.main')

@section('header')
    <style>
        .heros {
            height: 30rem;
        }

        @media(max-width: 900px) {}

        @media(max-width: 768px) {
            .gap-heros {
                margin-bottom: 1rem;
            }

            .heros {
                height: 20rem;
            }
        }

        @media(max-width: 500px) {}
    </style>
@endsection

@section('container')
    <div class="container py-5">
        <div class="row my-3">
            <div class="col-lg-8 col-md-7">
                <div class="card gap-heros heros">
                    <img src="{{ asset('storage/images/homepage/heros/NeverRegretClothes.jpeg') }}" class="card-img img-fluid"
                        alt="banner" style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                    <div class="card-img-overlay d-flex align-items-center text-white"
                        style="background-color: rgba(0, 0, 0, 0.45)">
                        <div class="p-3">
                            <h1 class="m-0 fw-bold">With Great Design <br> <span style="color: #53ff5f">Make You
                                    Perfect!</span></h1>
                            <p class="card-text m-0 py-4"><small>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Non molestiae ex cumque repellat sint exercitationem dicta ratione aut omnis
                                    veritatis.</small></p>
                            <a href="" class="btn btn-outline-light px-4 py-2 fw-bold">Shop now!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="d-flex h-100 flex-column justify-content-between gap-3">
                    <div class="card" style="height: 14rem;">
                        <img src="{{ asset('storage/images/homepage/heros/smiley-man-posing-outdoors-front-gate.jpg') }}"
                            alt="" class="img-fluid"
                            style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                        <div class="position-absolute w-100 h-100 d-flex align-items-end"
                            style="background-color: rgba(0, 0, 0, 0.5);">
                            <div class="p-4">
                                <h3 class="fw-bold m-0" style="color: #70ff7a;">Articles</h3>
                                <p class="text-white"><small>Lorem ipsum dolor sit, amet consectetur adipisicing
                                        elit.</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="card" style="height: 14rem;">
                        <img src="{{ asset('storage/images/homepage/heros/Black.png') }}" alt="" class="img-fluid"
                            style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                        <div class="position-absolute w-100 h-100 d-flex align-items-end"
                            style="background-color: rgba(0, 0, 0, 0.5);">
                            <div class="p-4">
                                <h3 class="fw-bold m-0" style="color: #70ff7a;">Location</h3>
                                <p class="text-white"><small>Lorem ipsum dolor sit, amet consectetur adipisicing
                                        elit.</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div style="margin-bottom: 5rem;">
            <div class="text-center py-4">
                <h1 class="m-0 fw-bold">New <span style="color: #1bac25;">Collections!</span></h1>
                <p class="text-secondary m-0"><small>Check our new collaborations!</small></p>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/images/homepage/collections/Pokemon.jpeg') }}" alt=""
                            class="img-fluid"
                            style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                        <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center"
                            style="background-color: rgba(0, 0, 0, 0.5);">
                            <h2 class="text-white text-center fw-bold">Toko <br> <span style="color: #1bac25;">x</span> <br>
                                Pokemon</h2>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/images/homepage/collections/demonSlayerjpeg.jpeg') }}" alt=""
                            class="img-fluid"
                            style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                        <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center"
                            style="background-color: rgba(0, 0, 0, 0.5);">
                            <h2 class="text-white text-center fw-bold">Toko <br> <span style="color: #1bac25;">x</span> <br>
                                Demon Slayer</h2>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/images/homepage/collections/BMTH.jpeg') }}" alt=""
                            class="img-fluid"
                            style="object-fit: cover; object-position: center; width: 100%; height: 100%;">
                        <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center"
                            style="background-color: rgba(0, 0, 0, 0.5);">
                            <h2 class="text-white text-center fw-bold">Toko <br> <span style="color: #1bac25;">x</span> <br>
                                BMTH</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="" style="margin-bottom: 5rem; padding-bottom: 8rem; padding-top: 5rem; background-color: #5dff6830;">
        <div class="container">
            <div class="text-center text-black py-4">
                <h1 class="text-center fw-bold m-0"><span style="color: #1bac25;">BEST</span> Product Sellers!</h1>
                <p class="text-dark"><small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa vel,
                        blanditiis voluptatum porro
                        corporis ipsa ipsam, quibusdam laboriosam corrupti voluptatibus omnis optio modi ut eligendi
                        adipisci sint inventore. Atque, ipsum.</small></p>
            </div>
            <div class="row row-cols-2 row-cols-md-4 row-cols-lg-4">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('storage/images/homepage/heros/NeverRegretClothes.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('storage/images/homepage/heros/NeverRegretClothes.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('storage/images/homepage/heros/NeverRegretClothes.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('storage/images/homepage/heros/NeverRegretClothes.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>



    </div>
    </div>
@endsection
