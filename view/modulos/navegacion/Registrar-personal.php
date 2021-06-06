<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Registrar Personal</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                    <li class="breadcrumb-item active">Registrar personal</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Registrar personal</h3>
                    </div>
                    <form id="FormRegistrarPersonal" name="FormRegistrarPersonal" method="POST">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="exampleInput" class="col-sm-4 col-form-label">Nombre</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="nombrePersonal" id="nombrePersonal" placeholder="Ingrese el nombre">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInput" class="col-sm-4 col-form-label">Apellido</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="apellidoPersonal" id="apellidoPersonal" placeholder="Ingrese el apellido">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInput" class="col-sm-4 col-form-label">identificaci&oacute;n</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="identificacionPersonal" id="identificacionPersonal" placeholder="Ingrese su identificaci&oacute;n">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInput" class="col-sm-4 col-form-label">Fecha nacimiento</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" name="fechaNacimientoPersonal" id="fechaNacimientoPersonal" placeholder="Ingrese el nombre de la categoria">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="exampleInput" class="col-sm-4 col-form-label">Contrase&ntilde;a</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" name="contrasenaPersonal" id="contrasenaPersonal" placeholder="Ingrese una contrase&ntilde;a">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInput" class="col-sm-4 col-form-label">Repite contrase&ntilde;a</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" name="repContrasenaPersonal" id="repContrasenaPersonal" placeholder="Ingrese nuevamente la contrase&ntilde;a">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInput" class="col-sm-4 col-form-label">Rol</label>
                                        <div class="col-sm-8">
                                            <select class="custom-select rounded-0" name="rolPersonal" id="rolPersonal" onchange="myRazon()">
                                                <option value="seleccione">- Seleccione -</option>
                                                <?php
                                                $query = $conexion->query("SELECT * FROM rol");
                                                while ($valores = mysqli_fetch_array($query)) {
                                                    echo '<option value="' . $valores['id'] . '">' . utf8_encode($valores['descripcion']) . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>