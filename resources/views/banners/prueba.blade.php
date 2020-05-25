@extends('layout.pagina')
@section('paypal')
sss
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($banner as $banners)
      <div class="carousel-item active">
        <img src="public/upload/{{$banners->imagen}}" class="d-block w-100" alt="...">
      </div>
      @endforeach
      {{-- <div class="carousel-item">
        <img src="public/sistema/img/green1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div> --}}
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
@endsection

