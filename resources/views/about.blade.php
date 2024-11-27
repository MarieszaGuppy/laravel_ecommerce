@extends('layouts.main')

@section('container')
    <div class="container">
        <h1 class="text-center mt-5">About <span style="color: #1bac25;">Us!</span></h1>
        <hr class="featurette-divider mb-5">
        <div class="content " style="margin-top: 70px; margin-bottom: 70px; ">
            <div class="row flex-row-reverse featurette py-3">
                <div class="col-md-5 mb-3">
                    <img src="{{ asset('assets/abouts/gedung.webp') }}" width="100%" height="100%" alt="Foto Perusahaan"
                        class="rounded" style="object-fit: cover; object-position: center;">
                </div>

                <div class="col-md-7">
                    <h2>Profile Company</h2>
                    <hr style="color: #009785;">
                    <h2 class="featurette-heading fw-normal lh-1 align-item-center text-center py-2">Company Name</h2>
                    <p class="lead">Our company, established with a vision to deliver innovative and high-quality
                        products, has consistently evolved to meet the dynamic demands of the market. We specialize in
                        providing a wide range of products tailored to enhance customer experiences across various
                        industries. With a commitment to excellence, we prioritize customer satisfaction by integrating
                        cutting-edge technology, sustainable practices, and a keen understanding of market trends. Our
                        skilled team of professionals ensures that each product is crafted with precision, from concept to
                        final delivery, adhering to the highest standards of quality and performance. </p>
                </div>
            </div>

            <div class="row featurette py-3" style="margin-top: 100px; margin-bottom: 100px;">
                <div class="col-md-5 mb-3">
                    <img src="{{ asset('assets/abouts/tim.jpg') }}" width="100%" height="100%" alt="Foto Team mungkin"
                        class="rounded" style="object-fit: cover; object-position: center;">
                </div>

                <div class="col-md-7">
                    <h2>Process Business</h2>
                    <hr style="color: #009785;">
                    <h2 class="featurette-heading fw-normal lh-1 align-item-center text-center py-2">Our Journey</h2>
                    <p class="lead">At [Company Name], our fashion business operates through a streamlined and efficient
                        process that ensures both quality and customer satisfaction at every step. From design conception to
                        the final product, we emphasize creativity, craftsmanship, and sustainability. The process begins
                        with our in-house design team, who carefully research the latest trends, materials, and consumer
                        preferences to create innovative, stylish collections. </p>
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
