@extends('layouts.app')
{{-- {{ asset('images/slide1.jpg') }} --}}
@section('content')
<div class="container">
    <div class="card">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('images/slide1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Manage your furniture with us</h5>
                  <p>It is much more easier now, with ILKEA.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/slide2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Dispose that paper, now go digital</h5>
                  <p>Keep track of your furniture with us, digitally</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <div class="card-body">
            <p class="card-text">
                A website to manage your furniture inventory, all in one place.
            </p>
        </div>
    </div>
</div>

<script>
    $('.carousel').carousel();
</script>
@endsection
