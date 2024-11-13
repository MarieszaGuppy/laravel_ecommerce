@extends('layouts.main')

@section('container')
<h2 class="text-center mt-5"><span class="text-body-secondary">About Us</h2>
    <hr class="featurette-divider mb-5">
<div class="content " style="margin-top: 70px; margin-bottom: 70px; ">
    <div class="row featurette" >
     <div class="row">
        <div class="col-md-7">
         <h2>Profile Company</h2>
            <hr style="color: #009785;" >
            <h2 class="featurette-heading fw-normal lh-1 align-item-center text-center">(Nama Perusahaan) </h2>
              <p class="lead">(Deskripsi Perusahaan)</p>
        </div>
            <div class="col-md-5">
              <img src="{{asset('assets/gedung.webp')}}" width="100%" height="100%" alt="Foto Perusahaan"     class="rounded">
            </div>
      </div>
    </div>
       <div class="row featurette" style="margin-top: 100px; margin-bottom: 100px;">
     <div class="row">
         <div class="col-md-5">
          <img src="{{asset('assets/tim.jpg')}}" width="100%" height="100%" alt="Foto Team mungkin" class="rounded">
         </div>

    <div class="col-md-7">
    <h2>Process Business</h2>
    <hr style="color: #009785;">
      <h2 class="featurette-heading fw-normal lh-1 align-item-center text-center">(Lanjutan Profile Bilaperlu dan bagus) </h2>
      <p class="lead">( Lanjutan dari deskripsi entah tentang kerjasama atau tentang perusahaan belanja)</p>
    </div>
    </div>
    </div>

    <div class="row">
        <div class="row justify-content-center text-center mt-5">
            <h2 >About Team</h2>
            <hr class="featurette-divider " style="margin-bottom: 60px">
            <div class="col-md-4 d-flex flex-column align-items-center ">
              <img src="" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" alt="Image 1">
              <h2 class="fw-normal">...</h2>
              <p class="">Chief Eksekutif Officer</p>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center">
              <img src="" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" alt="Image 1">
              <h2 class="fw-normal">...</h2>
              <p class="">Manager</p>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center">
              <img src="" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" alt="Image 1">
              <h2 class="fw-normal">....</h2>
              <p class="">Direktur Software Engineering</p>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center">
              <img src="" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" alt="Image 1">
              <h2 class="fw-normal">...</h2>
              <p class="">Direktur Pemasaran</p>
            </div>
            <div class="col-md-4 d-flex flex-column align-items-center">
              <img src="" class="bd-placeholder-img rounded-circle mb-3" width="140" height="140" alt="Image 1">
              <h2 class="fw-normal">...</h2>
              <p class="">HRD</p>
            </div>
          </div>
      </div><!-- /.row -->
</div>
@endsection
