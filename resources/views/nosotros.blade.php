@extends('layout')

@section('title', 'Inicio')

@section('content')
<div class="container">
    
     
   
    <div class="container-mision">
        
        <h1 class="mision">MISIÓN</h1>
        <h4 class="txt-mision">Nuestra misión es ser reconocidos por garantizar servicios innovadores, integrales y de calidad que contribuyan al mejor desarrollo y crecimiento de nuestros clientes.</h4>
        <div class="img-container">
            <img src="imagenes/ISO-NEGRO.png" class="img-mision-vision">
        </div>
        <h1 class="vision">VISIÓN</h1>
        <h4 class="txt-mision">Nuestra visión es ser reconocidos por garantizar servicios innovadores, integrales y de calidad que contribuyan al mejor desarrollo y crecimiento de nuestros clientes.</h4>
    </div><br><br>
    

    
       
        
</div>

<script>
    window.addEventListener('scroll', function() {
      var elements = document.querySelectorAll('.txt-mision');
  
      elements.forEach(function(element) {
        var positionFromTop = element.getBoundingClientRect().top;
        var screenHeight = window.innerHeight;
  
        if (positionFromTop - screenHeight <= 0 && positionFromTop >= -element.clientHeight) {
          element.style.opacity = 1;
          element.style.transform = 'translateY(0)';
        } else {
          element.style.opacity = 0;
          element.style.transform = 'translateY(20px)';
        }
      });
    });
  </script>
@endsection