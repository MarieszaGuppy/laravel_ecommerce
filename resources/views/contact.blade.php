@extends('layouts.main')

@section('container')
    <div class="container py-4">
        <h1 class="text-center pt-2 pb-4">Contact Us!</h1>

        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">
            <div class="col">
                <div class="card border-0 mb-3" style="background-color: #5dff6818;">
                    <div class="p-4 card-body">

                        <h2 class="fw-bold py-2 m-0">Get in Touch</h2>
                        <p class="small-text">Please contact us below to find out more, working hours 08.00 to
                            21.00</p>

                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 pt-3">
                            <div class="col mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle" style="background-color: #23a548;">
                                        <i class='bx bxs-phone text-white fs-5 p-2'></i>
                                    </div>
                                    <div class="ps-2">
                                        <h5 class="m-0 fw-bold">Phone</h5>
                                        <p class="m-0 text-secondary"><small>+62 838-3222-1760</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle" style="background-color: #23a548;">
                                        <i class='bx bx-envelope text-white fs-5 p-2'></i>
                                    </div>
                                    <div class="ps-2">
                                        <h5 class="m-0 fw-bold">Email</h5>
                                        <p class="m-0 text-secondary"><small>emailToko@gmail.com</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle" style="background-color: #23a548;">
                                    <i class='bx bx-map text-white fs-5 p-2'></i>
                                </div>
                                <div class="ps-2">
                                    <h5 class="m-0 fw-bold">Location</h5>
                                    <p class="m-0 text-secondary"><small>Jl. Jend. Ahmad Yani No.98, Nagri Tengah, Kec. Purwakarta, Kabupaten Purwakarta, Jawa Barat 41114</small></p>
                                </div>
                            </div>
                        </div>

                        <div class="border-top my-3"></div>

                        <div class="icons fs-6">
                            <h4 class="fw-semibold">Social Media :</h4>
                            <a href=""><box-icon name='twitter' type='logo'></box-icon></a>
                            <a href=""><box-icon name='youtube' type='logo'></box-icon></a>
                            <a href=""><box-icon name='facebook-circle' type='logo'></box-icon></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col mb-3">
                <div class="card p-4 h-100">
                    <h3 class="text-center py-2">Send a Message</h3>
                    <form action="">
                        <div class="row">
                            <div class="col mb-3">
                                <div>
                                    <input class="form-control " placeholder="First Name"></input>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div>
                                    <input class="form-control " placeholder="Last Name"></input>
                                </div>
                            </div>
                        </div>

                        <div class="w-100 mb-3">
                            <input class="form-control" placeholder="Subject" id="floatingTextarea"></input>
                        </div>

                        <div class="w-100 mb-4">
                            <textarea class="form-control" placeholder="Message" style="min-height: 8rem;"></textarea>
                        </div>

                        <button type="submit" class="btn text-white py-2 px-5"
                            style="background-color: #23a548;">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="py-4">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7973953299834!2d107.43978037499316!3d-6.547247393445711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e690e5975014a5d%3A0x87f7a97e7f9f961!2sSMKN%202%20Purwakarta!5e0!3m2!1sid!2sid!4v1731734754345!5m2!1sid!2sid"
                height="400" style="border:0;" allowfullscreen="" loading="lazy" class="w-100"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </div>
@endsection
