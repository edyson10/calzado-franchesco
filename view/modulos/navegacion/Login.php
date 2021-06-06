<?php

if (isset($_SESSION['rol'])) {
    header('Location: Administracion');
}
?>
<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="Login" class="h1"><b>Calzado Franchesco</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Inicio de sesi&oacute;n</p>

        <form id="FormLogin" name="FormLogin" method="POST">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="user" id="user" placeholder="Identificaci&oacute;n">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Contrase&ntilde;a">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <select class="custom-select rounded-0" name="rol" id="rol">
              <option value="seleccione">- Rol -</option>
              <?php 
              $query = $conexion->query("SELECT * FROM rol");
              while ($valores = mysqli_fetch_array($query)) {
                  echo '<option value="' . $valores['id'] . '">' . utf8_encode($valores['descripcion']) . '</option>';
              }
              ?>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6"></div>
            <!-- /.col -->
            <div class="col-6">
              <button type="submit" class="btn btn-primary btn-block">Iniciar sesi&oacute;n</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <br>
        <p class="mb-1">
          <a href="">¿Se te olvido la contrase&ntilde;a?</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->