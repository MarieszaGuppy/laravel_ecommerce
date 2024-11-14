@extends('layouts.main')

@section('container')
<div class="contact">
    <div class="h2 text-center mt-4 pt-4 mb-2">Contact Us!</div>

        <div class="cntct justify-content: center;">
            <div class="row mb-2 mt-5 w-100">
                <div class="col mt-0 mx-5">
                    <div class="card shadow object-fit: cover; object-position: center; width: 100%; height: 100%;">
                        <div class="p-2 pb-1 mb-4 card-body m-2 text center">
                            <h2 class="text-left h4">Get in Touch</h2>
                            <p class="small-text text-left">Please contact us below to find out more, working hours 08.00 to 21.00</p>
                            <div class="info m-3 text-small">
                                <h6>Address</h6>
                                <a href="https://maps.app.goo.gl/23L5UA24N9Dxv8du9" target="_blank">Jl. Jend. Ahmad Yani No.98</a>

                            </div>
                            <div class="info m-3 text-small">
                            <h6>Phone Number</h6>
                            <p class="font-size: 12px;">+62 3832221760</p>
                        </div>
                        <div class="info m-3 text-small">
                        <h6>Email</h6>
                        <p class="font-size: 12px;">@shop.com</p>
                    </div>
                    <div class="icons fs-6">
                        <box-icon name='instagram-alt' type='logo' ></box-icon>
                        <box-icon name='twitter' type='logo' ></box-icon>
                        <box-icon name='youtube' type='logo' ></box-icon>
                        <box-icon name='facebook-circle' type='logo' ></box-icon>
                    </div>
                </div>
            </div>
        </div>
        <div class="col pb-3 mb-2 mx-5 justify-content: center;">
            <div class="card shadow ">
                <div class="p-3 m-3 pb-2 h4">Send a Message</div>
                    <div class="p-2">
                        <textarea class="form-control " placeholder="Name" id="floatingTextarea"></textarea>
                    </div>
                    <div class="p-2 mb-2 pb-2">
                    <textarea class="form-control" placeholder="Massage" id="floatingTextarea"></textarea>
                </div>
                <div class="p-lg-4 mb-3 pb-2 ">
                    <button type="submit" class="btn btn-primary" style="background-color:  #009785;">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <img src="https://g.co/kgs/kPHVovY" alt="">
</div>

@endsection 