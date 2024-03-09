@extends('layout')

@section('title', 'Inicio')

@section('content')
   <!-- Contenido de la página de inicio aquí -->

   <div class="container">
     <div class="row">
        <div class="col-md-6">
            <h1 class="titulo">OASYS</h1>
            <h4 class="sub-titulo">Online Audit System</h4>
        </div>
        <div class="col-md-6 imagen d-flex justify-content-center align-items-center">
            <img src="imagenes/ISO.png"  class="img-fluid">
        </div>
     </div>
  
<br>
<h1 class="quienes-somos">¿Quiénes somos?</h1>
<h4 class="text-center texto-quienes">Somos una empresa comprometida en buscar la 
  excelencia y calidad, a través de soluciones integrales 
  en nuestro software. <br>Ofrecemos nuestros servicios a 
  negocios en desarrollo. </h4>
<br>
    <h1 class="nuestros-planes">Conoce sobre nuestros Planes</h1><br>
    <!--tarjetas-->
   
    <div class="row row-cols-1 row-cols-md-3 g-4 ">
        
      <div class="col mx-auto">
        <div class="card h-100 border-primary shadow">
          <div class="card-header bg bg-primary"><h4 class="card-title">PLAN PERSONAL</h4>
          </div>
            <div class="card-body text-center">
               <h6 class="card-subtitle mb-2 text-body-secondary"><b>1 Usuario</b></h6>
               <p class="card-text ">Inversión Mensual</p>
               <h1>US $8.<small><sup><b>25</b></sup></small></h1>
               <p>(Precio de introducción incluye IVA)</p>
               
               <div class="d-flex justify-content-center"> <!-- Agregar esta línea -->
                <button type="button" class="btn btn-primary mb-2">Comprar <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
               </div>
                  <div class="dropdown w-100">
                      <button class="btn border-primary dropdown-toggle w-100 position: relative" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ver Detalles
                      </button>
                      <div class="dropdown-menu w-100 dropdown-menu-bottom" aria-labelledby="dropdownMenuButton">
                        <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                            <p class="pl-2 mb-0">"Socio de la firma" Funciones: crear, modificar, revisar, eliminar y acceso a reportes de todo el proceso de auditoría.</p>
                        </div><br>
                        <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                            <p class="pl-2 mb-0">Soporte personalizado por personal de OASYS Latam.</p>
                        </div><br>
                        <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                            <p class="pl-2 mb-0">Licencia: 1 año.</p>
                        </div><br>
                        <div class="pl-2 d-flex justify-content-center">
                            <div class="bordeado text-center"> <!-- Centrar el div -->
                              <p class="mb-0"><b>Inversión Anual</b></p>
                              <span class="numero-grande">US $99.<sup>00</sup></span>
                              <p>(Precio de introducción incluye IVA)</p>
                            </div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
      </div>
          <div class="col mx-auto">
            <div class="card h-100 shadow" style="border-color:#656C70">
              <div class="card-header bg bg-secondary"><h4 class="card-title">PLAN DINÁMICO</h4>
              </div>
                <div class="card-body text-center">
                   <h6 class="card-subtitle mb-2 text-body-secondary"><b>2 Usuarios</b></h6>
                   <p class="card-text ">Inversión Mensual</p>
                   <h1>US $14.<small><sup><b>92</b></sup></small></h1>
                   <p>(Precio de introducción incluye IVA y descuento del 10%)</p>
                   
                   <div class="d-flex justify-content-center">
                    <button type="button" class="btn mb-2" style="background: #656C70; color:white">Comprar <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                   </div>
                      <div class="dropdown w-100">
                          <button class="btn dropdown-toggle w-100 position: relative" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-color: #656C70">
                            Ver Detalles
                          </button>
                          <div class="dropdown-menu w-100 dropdown-menu-bottom" aria-labelledby="dropdownMenuButton">
                            <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                                <p class="pl-2 mb-0">"Socio de la firma"<br>
                                  Funciones: crear, modificar, revisar, eliminar y acceso a reportes de todo el proceso de auditoría.
                                </p>
                            </div><br>
                            <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                              <p class="pl-2 mb-0">"Supervisor"<br>
                                Funciones: crear, modificar, revisar y acceso a reportes de todo el proceso de auditoría.
                              </p>
                            </div><br>
                            <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                                <p class="pl-2 mb-0">Soporte personalizado por personal de OASYS Latam.</p>
                            </div><br>
                            <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                                <p class="pl-2 mb-0">Licencia: 1 año.</p>
                            </div><br>
                            <div class="pl-2 d-flex justify-content-center">
                                <div class="bordeado text-center"> <!-- Centrar el div -->
                                  <p class="mb-0"><b>Inversión Anual</b></p>
                                  <span class="numero-grande">US $179.<sup>00</sup></span>
                                  <p>(Precio de introducción incluye IVA y descuento del 10%)</p>
                                </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
          </div>
          <div class="col mx-auto">
            <div class="card h-100 shadow" style="border-color: #161E70">
              <div class="card-header" style="background: #161E70"><h4 class="card-title">PLAN ESTRATÉGICO</h4>
              </div>
                <div class="card-body text-center">
                   <h6 class="card-subtitle mb-2 text-body-secondary"><b>3 Usuarios</b></h6>
                   <p class="card-text ">Inversión Mensual</p>
                   <h1>US $19.<small><sup><b>09</b></sup></small></h1>
                   <p>(Precio de introducción incluye IVA y descuento del 22.9%)</p>
                   
                   <div class="d-flex justify-content-center"> <!-- Agregar esta línea -->
                    <button type="button" class="btn mb-2" style="background: #161E70; color:white">Comprar <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                   </div>
                      <div class="dropdown w-100">
                          <button class="btn dropdown-toggle w-100 position: relative" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-color: #161E70">
                            Ver Detalles
                          </button>
                          <div class="dropdown-menu w-100 dropdown-menu-bottom" aria-labelledby="dropdownMenuButton">
                            <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                                <p class="pl-2 mb-0">"Socio de la firma"<br>Funciones: crear, modificar, revisar, eliminar y acceso a reportes de todo el proceso de auditoría.
                                </p>
                            </div><br>
                            <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                              <p class="pl-2 mb-0">"Supervisor"<br>Funciones: crear, modificar, revisar y acceso a reportes de todo el proceso de auditoría.
                              </p>
                          </div><br>
                          <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                            <p class="pl-2 mb-0">"Asistente de Auditoría"<br>
                              Funciones: crear, modificar, y acceso a reportes de las fases de planeación, ejecución e informe de auditoría.
                            </p>
                        </div><br>
                            <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                                <p class="pl-2 mb-0">Soporte personalizado por personal de OASYS Latam.</p>
                            </div><br>
                            <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                                <p class="pl-2 mb-0">Licencia: 1 año.</p>
                            </div><br>
                            <div class="pl-2 d-flex justify-content-center">
                                <div class="bordeado text-center"> <!-- Centrar el div -->
                                  <p class="mb-0"><b>Inversión Anual</b></p>
                                  <span class="numero-grande">US $229.<sup>00</sup></span>
                                  <p>(Precio de introducción incluye IVA y descuento del 22.9%)</p>
                                </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow" style="border-color:black">
              <div class="card-header" style="background: black"><h4 class="card-title">PLAN CORPORATIVO</h4>
              </div>
                <div class="card-body text-center">
                   <h6 class="card-subtitle mb-2 text-body-secondary"><b>4 a más Usuarios</b></h6>
                   <p class="card-text ">Inversión Mensual por cada Licencia</p>
                   <h1>US $5.<small><sup><b>99</b></sup></small></h1>
                   <p>(Precio de introducción incluye IVA y descuento del 27.4%)</p>
                   
                   <div class="d-flex justify-content-center"> <!-- Agregar esta línea -->
                    <button type="button" class="btn mb-2" style="background: black; color:white">Comprar <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                   </div>
                      <div class="dropdown w-100">
                          <button class="btn dropdown-toggle w-100 position: relative" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-color: black">
                            Ver Detalles
                          </button>
                          <div class="dropdown-menu w-100 dropdown-menu-bottom" aria-labelledby="dropdownMenuButton">
                            <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                                <p class="pl-2 mb-0">Tú decides cuantos usuarios necesitas y la cantidad de usuarios "Socio de la firma", “Supervisor” y “Auditor” requieres.
                                  Funciones: crear, modificar, revisar, eliminar y acceso a reportes de todo el proceso de auditoría conforme a cada tipo de usuario.
                                  </p>
                            </div><br>
                            <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                                <p class="pl-2 mb-0">Soporte personalizado por personal de OASYS Latam.</p>
                            </div><br>
                            <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                                <p class="pl-2 mb-0">Licencia: 1 año.</p>
                            </div><br>
                            <div class="pl-2 d-flex justify-content-center">
                                <div class="bordeado text-center"> <!-- Centrar el div -->
                                  <p class="mb-0"><b>Inversión Anual por cada Licencia</b></p>
                                  <span class="numero-grande">US $71.<sup>88</sup></span>
                                  <p>(Precio de introducción incluye IVA y descuento del 27.4%)</p>
                                </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100 shadow border-primary">
              <div class="card-header bg-primary"><h4 class="card-title" style="color: white;">PLAN CAMPUS</h4>
              </div>
                <div class="card-body text-center">
                   <h6 class="card-subtitle mb-2 text-body-secondary"><b>10 a más Usuarios</b></h6>
                   <p class="card-text ">Inversión Mensual</p>
                   <h1>US $8.<small><sup><b>33</b></sup></small></h1>
                   <p>(Precio de introducción por licencia incluye IVA)</p>
                   
                   <div class="d-flex justify-content-center"> <!-- Agregar esta línea -->
                    <button type="button" class="btn btn-primary mb-2">Comprar <i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                   </div>
                      <div class="dropdown w-100">
                          <button class="btn border-primary dropdown-toggle w-100 position: relative" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ver Detalles
                          </button>
                          <div class="dropdown-menu w-100 dropdown-menu-bottom" aria-labelledby="dropdownMenuButton">
                            <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                                <p class="pl-2 mb-0">"Docente"<br>
                                  Funciones: crear, modificar, revisar, eliminar y acceso a reportes de todo el proceso de auditoría.
                                  </p>
                            </div><br>
                            <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                              <p class="pl-2 mb-0">“Estudiante”<br>
                                Funciones: crear, modificar, y acceso a reportes de las fases de planeación, ejecución e informe de auditoría.
                                </p>
                          </div><br>
                            <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                                <p class="pl-2 mb-0">Soporte personalizado por personal de OASYS Latam.</p>
                            </div><br>
                            <div class="pl-2 d-flex"><i class="fa fa-check" aria-hidden="true"></i>
                                <p class="pl-2 mb-0">Licencia: 6 meses.</p>
                            </div><br>
                            <div class="pl-2 d-flex justify-content-center">
                                <div class="bordeado text-center"> <!-- Centrar el div -->
                                  <p class="mb-0"><b>Inversión Semestral</b></p>
                                  <span class="numero-grande">US $49.<sup>99</sup></span>
                                  <p>(Precio de introducción por licencia incluye IVA)</p>
                                </div>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
          </div>
</div>
</div><br><br>
@endsection
 
 