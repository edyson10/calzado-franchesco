<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Ver Personal</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                    <li class="breadcrumb-item active">Ver personal</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Personal registrados</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered ">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Identificaci&oacute;n</th>
                                    <th>Nombre</th>
                                    <th>Fecha nacimiento</th>
                                    <th>Rol</th>
                                    <th>Estado</th>
                                    <th>Acci&oacute;n</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = $conexion->query("SELECT p.id, p.nombre, p.apellido, p.identificacion, p.fecha_nacimiento, p.estado, r.descripcion AS rol 
                                FROM persona p INNER JOIN rol r ON p.rol = r.id WHERE p.estado = '1' ORDER BY p.identificacion ASC");
                                while ($row = mysqli_fetch_array($query)) {
                                    if ($row["estado"] == '1') {
                                        $estado = "<span class='badge badge-success'>Activo</span>";
                                    } else {
                                        $estado = "<span class='badge badge-danger'>Inactivo</span>";
                                    }
                                    echo "<tr>
                                            <td>" . $row["identificacion"] . "</td>
                                            <td>" . $row["nombre"] . " " . $row["apellido"] . "</td>
                                            <td>" . $row["fecha_nacimiento"] . "</td>
                                            <td>" . $row["rol"] . "</td>
                                            <td>" . $estado . "</td>
                                            <td>
                                                <a class='btn btn-danger' onclick='eliminarPersonal(" . $row["id"] . ")'><i class='fas fa-trash'></i></a>
                                            </td>
                                        </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>