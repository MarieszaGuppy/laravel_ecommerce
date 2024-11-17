@extends('layouts.main')

@section('container')
    <div class="container">
        <h1 class="text-center mt-5">About <span style="color: #1bac25;">Us!</span></h1>
        <hr class="featurette-divider mb-5">
        <div class="content " style="margin-top: 70px; margin-bottom: 70px; ">
            <div class="row flex-row-reverse featurette py-3">
                <div class="col-md-5 mb-3">
                    <img src="{{ asset('assets/gedung.webp') }}" width="100%" height="100%" alt="Foto Perusahaan"
                        class="rounded" style="object-fit: cover; object-position: center;">
                </div>

                <div class="col-md-7">
                    <h2>Profile Company</h2>
                    <hr style="color: #009785;">
                    <h2 class="featurette-heading fw-normal lh-1 align-item-center text-center py-2">Name Toko </h2>
                    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam ullam nostrum vel in
                        odit quam, sequi modi culpa quos, esse odio, fugiat obcaecati voluptatem. Provident nemo dolores
                        soluta quam voluptas. Saepe a modi assumenda quidem, facere in quos, deleniti eaque ducimus,
                        repellendus esse cum nihil numquam vel ipsa hic repudiandae.</p>
                </div>
            </div>

            <div class="row featurette py-3" style="margin-top: 100px; margin-bottom: 100px;">
                <div class="col-md-5 mb-3">
                    <img src="{{ asset('assets/tim.jpg') }}" width="100%" height="100%" alt="Foto Team mungkin"
                        class="rounded" style="object-fit: cover; object-position: center;">
                </div>

                <div class="col-md-7">
                    <h2>Process Business</h2>
                    <hr style="color: #009785;">
                    <h2 class="featurette-heading fw-normal lh-1 align-item-center text-center py-2">Lanjutan Profil</h2>
                    <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae blanditiis rem
                        voluptatibus neque voluptates eum temporibus repudiandae ipsa consequatur quo mollitia sapiente,
                        molestiae deserunt, magnam distinctio odio. Velit aliquid nostrum nam. Suscipit voluptatem id nihil
                        voluptatibus mollitia in aperiam magni libero sequi aut ipsa quo, nam ad consectetur a neque.</p>
                </div>
            </div>

            <div class="row justify-content-center text-center mt-5">
                <h1 class="py-2">About Team</h1>
                <hr class="featurette-divider " style="margin-bottom: 60px">
                <div class="col-md-4 d-flex flex-column align-items-center ">
                    <img src="" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140"
                        alt="Image 1">
                    <h2 class="fw-normal">...</h2>
                    <p class="">Chief Eksekutif Officer</p>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center">
                    <img src="" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140"
                        alt="Image 1">
                    <h2 class="fw-normal">...</h2>
                    <p class="">Manager</p>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center">
                    <img src="" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140"
                        alt="Image 1">
                    <h2 class="fw-normal">...</h2>
                    <p class="">Direktur Software Engineering</p>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center">
                    <img src="" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140"
                        alt="Image 1">
                    <h2 class="fw-normal">...</h2>
                    <p class="">Direktur Pemasaran</p>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center">
                    <img src="" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140"
                        alt="Image 1">
                    <h2 class="fw-normal">...</h2>
                    <p class="">HRD</p>
                </div>
            </div>
        </div>
    </div>
@endsection
