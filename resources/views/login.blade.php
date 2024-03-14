<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="css/login.css">
  <!-- Agregar jQuery desde un CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-celeste text-white">
            <h4 class="mb-0"><i class="fas fa-lock"></i> Iniciar Sesión</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico" required>
                </div>
              </div>
              <div class="form-group">
                <label for="password">Contraseña</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  </div>
                  <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña" required>
                </div>
              </div>
              <button type="submit" id="btnIngresar" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> Ingresar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{asset('js/login.js')}}"></script>
</body>
</html>
