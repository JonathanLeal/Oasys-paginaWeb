@extends('layout')

@section('title', 'Inicio')

@section('content')
   <!-- Contenido de la página de inicio aquí -->
<div class="fondo-con-imagen">
  
   <!--div class="container">
     <div class="row">
        <div class="col-md-6">
            <h1 class="titulo">OASYS</h1>
            <h4 class="sub-titulo">Online Audit System</h4>
        </div>
        <div class="col-md-6 imagen d-flex justify-content-center align-items-center">
            <img src="imagenes/ISO.png"  class="img-fluid" style="width: 80%; height: auto; display: block; margin: 0 auto; margin-top: auto;">
        </div>
     </div>
   </div>
  </div-->
   <div class="container">
     <div class="row col-md-6">
       
          <div class="imagen d-flex justify-content-center align-items-center">
            <img src="imagenes/ISO-BLANCO.png"  class="img-fluid" style="width: 80%; padding-bottom:0%;display: block; margin-top: 110px; maging-bottom: 0">
           
          </div>
            
       
        <!--h1 class="titulo">OASYS</h1-->
        <h1 class="sub-titulo">Online Audit System</h1>
     </div>
   </div>
  </div>

 <br>
 <div class="container">

     <!--h2 class="quienes-somos"></h2-->
     <div class="row h-100">
      <div class="col-md-6  d-flex flex-column">
        <div class="texto">
          <h2 style="font-family: Montserrat bold, Montserrat, Arial; color:#656C70;font-weight: bold;">Bienvenido a OASYS: Tu socio confiable en sistemas de Auditoría</h2>
          <h4 class="texto-quienes" style="font-family: Montserrat bold, Montserrat, Arial; ">
            Por que entendemos la importancia de contar
            con un sistema de auditoría robusto y eficaz para garantizar la integridad y
            eficiencia de tu empresa.<br> Nos enorgullece ofrecer soluciones 
            diseñadas para satisfacer las necesidades específicas de tu organización. 
            <br>Utilizamos tecnología de vanguardia para simplificar y agilizar el proceso de auditoría. 
            <br>
            Ofrecemos una variedad de planes de pago, diseñados para adaptarse a diferentes roles
            y niveles de servicio en la auditoría.
          </h4>
        </div>
      </div>
      <div class="col-md-6  d-flex flex-column">
        <div class="video d-flex justify-content-center align-items-center flex-grow-1">
          <!-- Aquí inserta el código de tu video -->
          <iframe width="560" height="315" src="https://www.youtube.com/embed/TUxYJH2rldQ" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    

             
               <h1 class="nuestros-planes" id="planes">PLANES PERSONALES</h1><br>
    <!--tarjetas, primer bloque-->
    <div class="container" style="text-align: center;">
      <div class="card-container">
          <div style="width:100%">
            <div class="card h-100 border-primary shadow mr-auto" id="card1">
                <div class="card-header bg bg-primary">
                    <h4 class="card-title">PLAN PERSONAL</h4>
                </div>
                <div class="card-body text-center">
                    <h6 class="card-subtitle mb-2 text-body-secondary"><b>1 Usuario</b></h6>
                    <p class="card-text">Inversión Mensual</p>
                    <h1>US $8.<small><sup><b>25</b></sup></small></h1>
                    <p>(Precio de introducción incluye IVA)</p>
    
                    <div class="d-flex justify-content-center mb-3" style="padding-top: 8%">
                        <button type="button" class="btn btn-primary">Comprar <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
    
                      <div class="dropdown1 w-100 pt-2">
                        <button class="btn border-primary dropdown-toggle text-center" type="button" id="dropdownMenuButton1" onclick="toggleDropdown('dropdownMenu1')" aria-haspopup="true" aria-expanded="false">
                            Ver Detalles
                        </button>
                        <ul class="dropdown-menu1" id="dropdownMenu1" aria-labelledby="dropdownMenuButton1" style="text-align: left">
                            <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                                <p class="pl-2 mb-0">"Socio de la firma" Funciones: crear, modificar, revisar, eliminar y acceso a reportes de todo el proceso de auditoría.</p>
                            </li>
                            <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                                <p class="pl-2 mb-0">Soporte personalizado por personal de OASYS Latam.</p>
                            </li>
                            <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                                <p class="pl-2 mb-0">Licencia: 1 año.</p>
                            </li>
                            <li>
                                <div class="pl-2 d-flex justify-content-center">
                                    <div class="bordeado text-center">
                                        <p class="mb-0"><b>Inversión Anual</b></p>
                                        <span class="numero-grande">US $99.<sup>00</sup></span>
                                        <p>(Precio de introducción incluye IVA)</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                      </div>
                </div>
            </div>
          </div>
      </div>
      <!--otra card-->
      <div class="card-container">
          <div style="width: 100%;">
               <div class="card h-100 border-primary shadow" id="card2">
                  <div class="card-header bg bg-primary">
                  <h4 class="card-title" style="color: white;">PLAN CAMPUS</h4>
                  </div>
                <div class="card-body text-center">
                  <h6 class="card-subtitle mb-2 text-body-secondary"><b>10 a más Usuarios</b></h6>
                    <p class="card-text">Inversión Mensual</p>
                    <h1>US $8.<small><sup><b>33</b></sup></small></h1>
                    <p>(Precio de introducción por licencia incluye IVA)</p>

                    <div class="d-flex justify-content-center mb-3">
                      <button type="button" class="btn btn-primary">Comprar <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>

                    <div class="dropdown2 w-100">
                      <button class="btn border-primary dropdown-toggle text-center" type="button" id="dropdownMenuButton2" onclick="toggleDropdown('dropdownMenu2')" aria-haspopup="true" aria-expanded="false">
                          Ver Detalles
                      </button>
                       <ul class="dropdown-menu2 " id="dropdownMenu2" aria-labelledby="dropdownMenuButton2" style="text-align: left">
                          <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                            <p class="pl-2 mb-0">"Docente"<br>Funciones: crear, modificar, revisar, eliminar y acceso a reportes de todo el proceso de auditoría.</p>
                          </li>
                          <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                            <p class="pl-2 mb-0">“Estudiante”<br>Funciones: crear, modificar, y acceso a reportes de las fases de planeación, ejecución e informe de auditoría.
                            </p>
                          </li>
                          <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                            <p class="pl-2 mb-0">Soporte personalizado por personal de OASYS Latam.</p>
                          </li>
                          <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                            <p class="pl-2 mb-0">Licencia: 6 meses.</p>
                          </li>
                          <li>
                             <div class="pl-2 d-flex justify-content-center">
                                <div class="bordeado text-center"> <!-- Centrar el div -->
                                <p class="mb-0"><b>Inversión Semestral</b></p>
                                <span class="numero-grande">US $49.<sup>99</sup></span>
                                <p>(Precio de introducción por licencia incluye IVA)</p>
                                </div>
                             </div>
                          </li>
                       </ul>
                    </div>
            
                </div>
              </div>
            </div>
      </div>

    </div>

    <br><br>

    <!--segundo bloque de card, card 3-->
    <div class="container" style="text-align: center;">
      <h1 class="plan-emp text-center">PLANES EMPRESARIALES</h1><br>
      <div class="card-container">
          <div style="width:100%">
            <div class="card h-100 shadow" style="border-color: #161E70;" >
              <div class="card-header" style="background-color: #161E70;"><h4 class="card-title">PLAN DINÁMICO</h4>
              </div>
                <div class="card-body text-center">
                    <h6 class="card-subtitle mb-2 text-body-secondary"><b>2 Usuario</b></h6>
                    <p class="card-text">Inversión Mensual</p>
                    <h1>US $14.<small><sup><b>92</b></sup></small></h1>
                    <p>(Precio de introducción incluye IVA y descuento del 10%)</p>
    
                    <div class="d-flex justify-content-center mb-2">
                      <button type="button" class="btn" style="background: #161E70;; color:white">Comprar <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>
    
                    <div class="dropdown3 w-100 pt-2">
                      <button class="btn border-primary dropdown-toggle text-center" type="button" id="dropdownMenuButton3" onclick="toggleDropdown('dropdownMenu3')" aria-haspopup="true" aria-expanded="false">
                          Ver Detalles
                      </button>
                        <ul class="dropdown-menu3" id="dropdownMenu3" aria-labelledby="dropdownMenuButton3" style="text-align: left">
                          <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                            <p class="pl-2 mb-0">"Socio de la firma"<br>
                              Funciones: crear, modificar, revisar, eliminar y acceso a reportes de todo el proceso de auditoría.
                            </p>
                          </li>
                          <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                             <p class="pl-2 mb-0">"Supervisor"<br>
                            Funciones: crear, modificar, revisar y acceso a reportes de todo el proceso de auditoría.
                             </p>
                          </li>
                          <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                            <p class="pl-2 mb-0">Soporte personalizado por personal de OASYS Latam.</p></li>
                          <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                            <p class="pl-2 mb-0">Licencia: 1 año.</p></li>
                          <li>
                            <div class="pl-2 d-flex justify-content-center">
                              <div class="bordeado text-center"> <!-- Centrar el div -->
                                <p class="mb-0"><b>Inversión Anual</b></p>
                                 <span class="numero-grande">US $179.<sup>00</sup></span>
                                 <p>(Precio de introducción incluye IVA y descuento del 10%)</p>
                              </div>
                           </div>
                          </li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
      </div>
      <!--card 4-->
      <div class="card-container">
          <div style="width: 100%;">
            <div class="card h-100 shadow" style="border-color: #161E70;">
                 <div class="card-header" style="background: #161E70"><h4 class="card-title">PLAN ESTRATÉGICO</h4>
                 </div>
                <div class="card-body text-center">
                  <h6 class="card-subtitle mb-2 text-body-secondary"><b>3 Usuarios</b></h6>
                    <p class="card-text">Inversión Mensual</p>
                    <h1>US $19.<small><sup><b>09</b></sup></small></h1>
                    <p>(Precio de introducción incluye IVA y descuento del 22.9%)</p>

                    <div class="d-flex justify-content-center mb-2">
                      <button type="button" class="btn" style="background: #161E70;; color:white">Comprar <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                    </div>

                    <div class="dropdown4 w-100 pt-2">
                      <button class="btn border-primary dropdown-toggle text-center" type="button" id="dropdownMenuButton4" onclick="toggleDropdown('dropdownMenu4')" aria-haspopup="true" aria-expanded="false">
                          Ver Detalles
                      </button>
                       <ul class="dropdown-menu4" id="dropdownMenu4" aria-labelledby="dropdownMenuButton4" style="text-align: left">
                          <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                            <p class="pl-2 mb-0">"Socio de la firma"<br>
                            Funciones: crear, modificar, revisar, eliminar y acceso a reportes de todo el proceso de auditoría.
                            </p>
                          </li>
                          <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                             <p class="pl-2 mb-0">"Supervisor"<br>
                             Funciones: crear, modificar, revisar y acceso a reportes de todo el proceso de auditoría.
                             </p>
                          </li>
                          <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                             <p class="pl-2 mb-0">"Asistente de Auditoría"<br>
                              Funciones: crear, modificar, y acceso a reportes de las fases de planeación, ejecución e informe de auditoría.
                               </p>
                          </li>
                          <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                             <p class="pl-2 mb-0">Soporte personalizado por personal de OASYS Latam.</p>
                          </li>
                          <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                             <p class="pl-2 mb-0">Licencia: 1 año.</p>
                          </li>
                          <li>
                            <div class="pl-2 d-flex justify-content-center">
                               <div class="bordeado text-center"> <!-- Centrar el div -->
                                  <p class="mb-0"><b>Inversión Anual</b></p>
                                  <span class="numero-grande">US $229.<sup>00</sup></span>
                                  <p>(Precio de introducción incluye IVA y descuento del 22.9%)</p>
                               </div>
                            </div>
                          </li>
                       </ul>
                    </div>
                </div>
            </div>
          </div>
      </div>
      <!--otra card 5-->
      <div class="card-container">
          <div style="width: 100%;">
            <div class="card h-100 shadow" style="border-color: #161E70;">
              <div class="card-header" style="background: #161E70;"><h4 class="card-title">PLAN CORPORATIVO</h4>
              </div>
              <div class="card-body text-center">
                <h6 class="card-subtitle mb-2 text-body-secondary"><b>4 a más Usuarios</b></h6>
                <p class="card-text ">Inversión Mensual por cada Licencia</p>
                <h1>US $5.<small><sup><b>99</b></sup></small></h1>
                <p>(Precio de introducción incluye IVA y descuento del 27.4%)</p>

                <div class="d-flex justify-content-center mb-2">
                  <button type="button" class="btn" style="background: #161E70;; color:white">Comprar <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                </div>

                <div class="dropdown5 w-100 pt-2">
                  <button class="btn border-primary dropdown-toggle text-center" type="button" id="dropdownMenuButton5" onclick="toggleDropdown('dropdownMenu5')" aria-haspopup="true" aria-expanded="false">
                      Ver Detalles
                  </button>
                    <ul class="dropdown-menu5" id="dropdownMenu5" aria-labelledby="dropdownMenuButton5" style="text-align: left">
                      <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                        <p class="pl-2 mb-0">Tú decides cuantos usuarios necesitas y la cantidad de usuarios "Socio de la firma", “Supervisor” y “Auditor” requieres.
                          Funciones: crear, modificar, revisar, eliminar y acceso a reportes de todo el proceso de auditoría conforme a cada tipo de usuario.
                           </p>
                      </li>
                      <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                        <p class="pl-2 mb-0">Soporte personalizado por personal de OASYS Latam.</p>
                      </li>
                      <li class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                        <p class="pl-2 mb-0">Licencia: 1 año.</p>
                      </li>
                      <li>
                        <div class="pl-2 d-flex justify-content-center">
                           <div class="bordeado text-center"> <!-- Centrar el div -->
                             <p class="mb-0"><b>Inversión Anual por cada licencia</b></p>
                             <span class="numero-grande">US $71.<sup>88</sup></span>
                             <p>(Precio de introducción incluye IVA y descuento del 27.4%)</p>
                            </div>
                        </div>
                      </li>
                    </ul>
                </div>
          
              </div>
            </div>
  
          </div>
      </div>
    </div>
<br><br>
    <h1 class="d-flex justify-content-center preguntas" style="font-weight: bold">PREGUNTAS FRECUENTES</h1>
    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            
            <button class="btn  btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 20px;font-weight: bolder;">
              ¿Puedo cambiar a otro plan?
            </button>
          </h2>
        </div>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body" style="font-size: 20px">
            Si tu empresa o negocio necesita cambiar de plan, puede hacerlo, solo comunicate con Soporte Técnico.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h2 class="mb-0">
            
            <button class="btn  btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="font-size: 20px; 
            font-weight: bolder;">
              ¿Cuanto debo esperar para empezar a trabajar en el sistema de auditoría?
            </button>
          </h2>
        </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
          <div class="card-body" style="font-size: 20px;">
            Una vez realices la compra de tu plan, nuestro equipo de Soporte se comunicará contigo.
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>

 </div><!--div del container principal-->


<script>
 

 
// Seleccionamos el elemento que queremos animar
const nuestrosPlanes = document.querySelector('.nuestros-planes');

// Creamos una nueva instancia de IntersectionObserver
const observerNuestrosPlanes = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        // Si el elemento está en la pantalla (es decir, tiene un índice de intersección mayor que 0)
        if (entry.intersectionRatio > 0) {
            // Añadimos la clase 'show' para mostrar el texto con una animación
            nuestrosPlanes.classList.add('show');
        } else {
            // Si el elemento ya no está en la pantalla, quitamos la clase 'show' para que la animación pueda repetirse
            nuestrosPlanes.classList.remove('show');
        }
    });
});

// Observamos el elemento
observerNuestrosPlanes.observe(nuestrosPlanes);


//para animar planes empresariales
const planesEmpre = document.querySelector('.plan-emp');

// Creamos una nueva instancia de IntersectionObserver
const observerPlanesEmpre = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        // Si el elemento está en la pantalla (es decir, tiene un índice de intersección mayor que 0)
        if (entry.intersectionRatio > 0) {
            // Añadimos la clase 'show' para mostrar el texto con una animación
            planesEmpre.classList.add('show');
        } else {
            // Si el elemento ya no está en la pantalla, quitamos la clase 'show' para que la animación pueda repetirse
            planesEmpre.classList.remove('show');
        }
    });
});
observerPlanesEmpre.observe(planesEmpre);

//para animar la seccion de preguntas
const preguntas = document.querySelector('.preguntas');

// Creamos una nueva instancia de IntersectionObserver
const observerPreg = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        // Si el elemento está en la pantalla (es decir, tiene un índice de intersección mayor que 0)
        if (entry.intersectionRatio > 0) {
            // Añadimos la clase 'show' para mostrar el texto con una animación
            preguntas.classList.add('show');
        } else {
            // Si el elemento ya no está en la pantalla, quitamos la clase 'show' para que la animación pueda repetirse
            preguntas.classList.remove('show');
        }
    });
});

// Observamos el elemento
observerPreg.observe(preguntas);



function toggleDropdown(dropdownMenuId) {
    var dropdownMenu = document.getElementById(dropdownMenuId);
    dropdownMenu.classList.toggle("active");
    // Detener la propagación del evento click para evitar que se active el evento del documento
    event.stopPropagation();
}

// Agregar un listener de click al documento para cerrar el menú desplegable si se hace clic fuera de él
/*document.addEventListener("click", function(event) {
    var dropdowns = document.querySelectorAll(".dropdown-menu1");
    dropdowns.forEach(function(dropdown1) {
        if (!dropdown1.contains(event.target)) {
            dropdown1.classList.remove("active");
        }
    });
});*/



function enviarMensajeWhatsApp() {
    // Número de teléfono al que se enviará el mensaje
    var numeroTelefono = "+50375141115"; // Reemplaza con el número al que deseas enviar el mensaje
    
    // Mensaje que se enviará por WhatsApp
    var mensaje = "¡Hola! Estoy interesado en sus servicios. ¿Podemos hablar más al respecto?";
    
    // Genera el enlace para enviar el mensaje por WhatsApp
    var enlaceWhatsApp = "https://api.whatsapp.com/send?phone=" + numeroTelefono + "&text=" + encodeURIComponent(mensaje);
    
    // Abre el enlace en una nueva pestaña del navegador
    window.open(enlaceWhatsApp);
  }




 //para las preguntas frecuentes
 $('.collapse').collapse()


</script>

@endsection



