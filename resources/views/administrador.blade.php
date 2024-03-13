<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
</head>
<body style="font-family:  font-family: Montserrat bold, Montserrat, Arial">
     <!-- Header -->
     <header class="header-admin fixed-top">
        <img class="imagenLogo" src="imagenes/BLANCO.png" style="max-height: 90px; background:#161E70">
        <nav>
            <ul>
                <i class="fa fa-user-circle" aria-hidden="true"></i><li><a class="pl-2">Logout</a></li>
              
            </ul>
        </nav>
    </header>
    <h1 class="text-center" style="margin-top: 122px; padding:4px; padding-top:5px; background: #656C70;">Administrar Contenido</h1>
    <div class="container">
        <div class="row">
            
            <div class="col-6 d-flex justify-content-center align-items-center">
                <img class="imagenCard" src="imagenes/card.png" style="max-width: 300px; margin-top: 30px">
            </div>
            <div class="col-6">
                <h3 class="text-center" style="padding-top:30px">Componentes de la página</h3>
                <ul>
                    <ol>
                        <b>1.</b> Titulo: Puedes cambiar el color de fondo.
                    </ol>
                    <ol>
                        <b>2.</b> Sub Titulo: Puedes cambiar el texto.
                    </ol>
                    <ol>
                        <b>3.</b> Precio inversión mensual: Puedes cambiar el precio de la Inversión mensual.
                    </ol>
                    <ol>
                        <b>4.</b> <i>Texto inversión mensual:</i> Puedes cambiar el texto que hace referencia a la inversión mensual.
                    </ol>
                    <ol>
                        <b>5.</b> <i>Botón comprar:</i> Puedes cambiar el color del botón de comprar.
                    </ol>
                    <ol>
                        <b>6.</b> <i>Menú desplegable:</i> Puedes cambiar el contenido del menu.
                    </ol>
                    <ol>
                        <b>7.</b> <i>Precio Inversión Anual:</i> Puedes cambiar el precio de la inversión anual.
                    </ol>
                    <ol>
                        <b>8.</b> <i>Texto Inversión Anual:</i> Puedes cambiar el texto que hace referencia a la inversión anual.
                    </ol>
                </ul>
            </div>
        </div>
        <br>
        <br>
    </div>
        <!-- formularios para hacer cambios-->
        <div class="container">
            <div class="row">
                <div class="col-8 d-flex justify-content-center align-items-center">
                    <div class="shadow p-3" style="border: 1px solid gray; border-radius: 10px; width:100%">
                        <label>Selecciona la tarjeta a modificar</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">PlAN PERSONAL</option>
                            <option value="2">PLAN DINÁMICO</option>
                            <option value="3">PLAN ESTRATÉGICO</option>
                            <option value="4">PLAN CORPORATIVO</option>
                            <option value="5">PLAN CAMPUS</option>
                        </select>
                        <form style="margin-top: 10px; padding: 8px; width: 100%;">
                            <div class="mb-3 d-flex align-items-center">
                                <label for="titulo" class="form-label me-3">Titulo</label>
                                <input type="text" class="form-control" id="titulo" aria-describedby="tituloHelp">
                            </div>
                            <!-- Otros campos del formulario aquí -->
                            <div class="mb-3 d-flex align-items-center">
                                <label for="sub-titulo" class="form-label me-3">Sub Titulo</label>
                                <input type="text" class="form-control" id="sub-titulo">
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <label for="precio-inv-mensual" class="form-label me-3">Precio inversión mensual</label>
                                <input type="text" class="form-control" id="precio-mensual">
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <label for="texto-inv-mensual" class="form-label me-3">Texto inversión mensual</label>
                                <input type="text" class="form-control" id="texto-mensual">
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <label for="boton-comprar" class="form-label me-3">Botón comprar</label>
                                <input type="text" class="form-control" id="btn-comprar">
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <label for="mneu" class="form-label me-3">Menú desplegable</label>
                                <textarea type="text" class="form-control" id="lista-menu"></textarea>
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <label for="precio-inv-anual" class="form-label me-3">Precio inversión anual</label>
                                <input type="text" class="form-control" id="precio-anual">
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <label for="texto-inv-anual" class="form-label me-3">Texto inversión anual</label>
                                <input type="text" class="form-control" id="texto-anual">
                            </div>
                          <div class="d-flex justify-content-center align-items-center">
                            <button type="submit" class="btn btn-success me-2"><i class="fa fa-eye pr-2" aria-hidden="true"></i>Ver</button>
                            <button type="submit" class="btn btn-danger me-2"><i class="fa fa-reply pr-2" aria-hidden="true"></i>Cancelar</button>
                            <button type="submit" class="btn btn-primary me-2"><i class="fa fa-floppy-o pr-2" aria-hidden="true"></i>Guardar</button>
                          </div>
                           
                        </form>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <h4>Ver modificaciones</h4>
                </div>
            </div>
        </div>
        
        <br><br><br>
        
 
    
 
    
    
</body>
</html>