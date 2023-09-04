@extends('layout.main')

@section('title')
    Home
@endsection

@section('section')
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://images.unsplash.com/photo-1506765515384-028b60a970df?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8YmFubmVyfGVufDB8fDB8fHww&w=1000&q=80" class="d-block w-100" alt="..." height="500">
      </div>
      <div class="carousel-item">
        <img src="https://img.freepik.com/free-photo/digital-world-banner-background-remixed-from-public-domain-by-nasa_53876-124622.jpg?w=360" class="d-block w-100" alt="..." height="500">
      </div>
      <div class="carousel-item">
        <img src="https://www.xtrafondos.com/en/descargar.php?id=2902&resolucion=1920x1080" class="d-block w-100" alt="..." height="500">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection