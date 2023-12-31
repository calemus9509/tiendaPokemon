<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body onload="selectRol()">
  <div class="row my-5">
    <h1 class="text-center">Registro Usuarios</h1>
  </div>
  <div class="row">
    <div class="col-2">
      <span class="fw-bolder">Tipo Doc:</span>
    </div>
    <div class="col-4">
      <div class="form-floating">
        <select name="selTipoDoc" id="selTipoDoc" class="form-control">
          <option value="0" selected disabled>Seleccionar</option>
          <option value="CC">CC</option>
          <option value="TI">TI</option>
          <option value="NIUP">NIUP</option>
        </select>
        <label for="floatingInput">Tipo Doc:</label>
      </div>
    </div>
    <div class="col-2">
      <span class="fw-bolder">Identificación: </span>
    </div>
    <div class="col-4 form-floating">
      <div class="form-floating">
        <input type="number" name="txtIdentificacion" id="txtIdentificacion" class="form-control" placeholder="." />
        <label for="floatingInput">Identificacion:</label>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-2">
      <span class="fw-bolder">Nombre:</span>
    </div>
    <div class="col-4">
      <div class="form-floating">
        <input type="txt" name="txtNombre" id="txtNombre" class="form-control" placeholder="." />
        <label for="floatingInput">Nombre:</label>
      </div>
    </div>
    <div class="col-2">
      <span class="fw-bolder">Apellidos:</span>
    </div>
    <div class="col-4">
      <div class="form-floating">
        <input type="txt" name="txtApellido" id="txtApellido" class="form-control" placeholder="." />
        <label for="floatingInput">Apellidos:</label>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-2">
      <span class="fw-bolder">Correo:</span>
    </div>
    <div class="col-4">
      <div class="form-floating">
        <input type="email" name="txtCorreo" id="txtCorreo" class="form-control" placeholder="." />
        <label for="floatingInput">Correo:</label>
      </div>
    </div>
    <div class="col-2">
      <span class="fw-bolder">Contraseña:</span>
    </div>
    <div class="col-4">
      <div class="form-floating">
        <input type="password" name="txtPassword" id="txtPassword" class="form-control" placeholder="." />
        <label for="floatingInput">Contraseña:</label>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-2">
      <span class="fw-bolder">Direccion:</span>
    </div>
    <div class="col-4">
      <div class="form-floating">
        <input type="txt" name="txtDireccion" id="txtDireccion" class="form-control" placeholder="." />
        <label for="floatingInput">Direccion:</label>
      </div>
    </div>
    <div class="col-2">
      <span class="fw-bolder">Telefono:</span>
    </div>
    <div class="col-4">
      <div class="form-floating">
        <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control" placeholder="." />
        <label for="floatingInput">telefono:</label>
      </div>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-2">
      <span class="fw-bolder">Genero:</span>
    </div>
    <div class="col-4">
      <div class="form-floating">
        <select name="selGenero" id="selGenero" class="form-control">
          <option value="0" selected disabled>Seleccionar</option>
          <option value="M">Hombre</option>
          <option value="F">Mujer</option>
        </select>
        <label for="floatingInput">Genero:</label>
      </div>
    </div>
    <div class="col-2">
      <span class="fw-bolder">Rol:</span>
    </div>
    <div class="col-4">
      <div class="form-floating">
        <select name="selRol" id="selRol" class="form-control">
          <option value="0" selected disabled>Seleccionar</option>
        </select>
        <label for="floatingInput">Rol:</label>
      </div>
    </div>
  </div>
  <div class="row my-3 justify-content-center">
    <div class="col-4 d-grid gap-2">
      <a onclick="create()" class="btn btn-primary">Crear</a>
      <a href="login.php" class="btn btn-warning">Iniciar Sesion</a>
    </div>
  </div>
</body>

</html>

<script src="./assets//js/registro.js"></script>
<script src="../view/assets/js/axios.min.js"></script>
<link rel="stylesheet" href="../view/assets/css/bootstrap.min.css" />