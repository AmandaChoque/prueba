@extends('layouts.template')
@section('title','Proyecto INF 281')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <h1>"Bienvenido a la página principal del proyecto"</h1>
    <h2>YESSICA</h2>
    <span class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">INF 281</span>



    <form action="{{ route('video.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="file" name="video" accept="video/*">
      <button type="submit">Subir Video</button>
    </form>
  



    <!--PRUEBA DE CARRUSEL-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://i.blogs.es/50a1c5/t4yxpvu/840_560.jpeg" class="d-block w-100" alt="Slide 1" style="height: 500px;">
            <div class="carousel-caption d-none d-md-block">
              <h5>Palabra 1</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://i.pinimg.com/736x/2b/66/0a/2b660a23f2efd9444e6bbbc65f14da74.jpg" class="d-block w-100" alt="Slide 2" style="height: 500px;">
            <div class="carousel-caption d-none d-md-block">
              <h5>Palabra 2</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://www.nintenderos.com/wp-content/uploads/2022/09/One-Piece-luffy.jpg" class="d-block w-100" alt="Slide 3" style="height: 500px;">
            <div class="carousel-caption d-none d-md-block">
              <h5>Palabra 3</h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
@endsection