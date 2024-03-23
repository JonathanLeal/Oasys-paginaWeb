@extends('layout')

@section('title', 'Inicio')

@section('content')
<div class="container">
  <div class="container-mision">
    <h1 class="quienes-somos text-primary d-flex justify-content-center">¿QUIÉNES SOMOS?</h1>
    <h4 class="text-center texto-quienes">Somos una empresa comprometida en buscar la 
      excelencia y calidad, a través de soluciones integrales 
      en nuestro software. <br>Ofrecemos nuestros servicios a 
      negocios en desarrollo. </h4>
  </div>
</div>

    <div class="row">
      <div class="col-md-6 img-mision mt-0">
        <h1 class="mision text-center">MISIÓN</h1>
        <h4 class="txt-mision d-flex p-1">Somos una empresa comprometida, 
          dedicada a la excelencia y calidad, ofreciendo soluciones
          integrales por medio de softwares y servicios empresariales,
          dirigidos a trabajadores independientes y organizaciones en expansión. 
        </h4>
      </div>
    
      <div class="col-md-6 img-vision mt-0">
        <h1 class="vision text-center">VISIÓN</h1>
        <h4 class="txt-vision d-flex p-1">Ser una empresa líder a nivel regional, reconocida por 
          garantizar servicios innovadores, integrales y de calidad 
          que contribuyan al desarrollo y crecimiento de nuestros clientes.
        </h4>
      </div>
    </div>
 <br>
  <div class="text-valores" style="width:80%;">
    <h1 class="valores text-center d-flex justify-content-center">VALORES</h1>
    <br>
    <ul class="texto-valores justify-content-center">
      <li class="pl-2  d-flex mb-1">
        <h3 class="pl-2 "><b>Integridad:</b> Garantizando las buenas prácticas, herramientas y procesos con un sentido ético, siendo consecuente en todas las acciones</h3>
      </li>
      <li class="pl-2 d-flex mb-1">
        <h3 class="pl-2 "><b>Excelencia:</b> ofrecemos soluciones que se caracterizan por la eficiencia y excelencia.
        </h3>
      </li>
      <li class="pl-2 d-flex mb-1">
        <h3 class="pl-2 "><b>Compromiso:</b> Comprometidos con la funcionalidad eficaz de los softwares.
        </h3>
      </li>
      <li class="pl-2 d-flex mb-1">
        <h3 class="pl-2 "><b>Calidad:</b> aseguramos los servicios de calidad que generan valor en los clientes.</h3>
      </li>
      <li class="pl-2 d-flex mb-1">
        <h3 class="pl-2"><b>Responsabilidad:</b> Cumplimos con los tiempos de entrega y asegurando la satisfacción de los clientes.
        </h3>
      </li>
    </ul>
  </div>
  <br><br>
</div>



<script>
// Seleccionamos el elemento que queremos animar
const quienesSomos = document.querySelector('.quienes-somos');

// Creamos una nueva instancia de IntersectionObserver
const observerQuinesSomos = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        // Si el elemento está en la pantalla (es decir, tiene un índice de intersección mayor que 0)
        if (entry.intersectionRatio > 0) {
            // Añadimos la clase 'show' para mostrar el texto con una animación
            quienesSomos.classList.add('show');
        } else {
            // Si el elemento ya no está en la pantalla, quitamos la clase 'show' para que la animación pueda repetirse
            quienesSomos.classList.remove('show');
        }
    });
});

// Observamos el elemento
observerQuinesSomos.observe(quienesSomos);


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