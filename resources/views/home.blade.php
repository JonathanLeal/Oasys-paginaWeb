@extends('layout')

@section('title', 'Inicio')

@section('content')
   <!-- Contenido de la página de inicio aquí -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="titulo">OASYS</h1>
            <h4 class="sub-titulo"><i>Online Audit System</i></h4>
        </div>
        <div class="col-md-6 imagen  d-flex justify-content-center align-items-center">
            <img src="imagenes/imagen.png"  class="img-fluid">
        </div>
    </div>
    <h1 class="nuestros-planes">Conoce sobre nuestros Planes</h1>
    <!--tarjetas-->
    <div class="row row-cols-1 row-cols-md-3 g-4 ">
        <div class="col">
          <div class="card h-100">
          
            <div class="card-body">
                <h5 class="card-title">PLAN A</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Subtitulo</h6>
                 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 <a href="#" class="card-link">Comprar</a>
                 <a href="#" class="card-link">Ver Detalles</a>
            </div>
            
          </div>
        </div>
        <div class="col">
            <div class="card h-100">
            
              <div class="card-body">
                  <h5 class="card-title">PLAN B</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Subtitulo</h6>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   <a href="#" class="card-link">Comprar</a>
                   <a href="#" class="card-link">Ver Detalles</a>
              </div>
              
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
            
              <div class="card-body">
                  <h5 class="card-title">PLAN C</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Subtitulo</h6>
                   <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                   <a href="#" class="card-link">Comprar</a>
                   <a href="#" class="card-link">Ver Detalles</a>
              </div>
              
            </div>
          </div>
</div>
@endsection
