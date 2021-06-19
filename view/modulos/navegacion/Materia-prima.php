<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Materia prima</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                    <li class="breadcrumb-item active">Materia prima</li>
                </ol>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-4">
                <a type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-materia-prima">Registrar materia prima</a>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Modal para registrar categoria -->
<div class="modal fade" id="modal-materia-prima">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar materia prima</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="FormRegistrarMateriaPrima" id="FormRegistrarMateriaPrima" method="POST">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="exampleInput" class="col-sm-3 col-form-label">Descripci&oacute;n</label>
                        <div class="col-sm-9">
                            <input type="text" name="descripcionMateria" class="form-control" id="descripcionMateria" placeholder="Ingrese la descripci&oacute;n de la materia prima.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInput" class="col-sm-3 col-form-label">Metros</label>
                        <div class="col-sm-9">
                            <input type="text" name="metrosMateria" class="form-control" id="metrosMateria" placeholder="Ingrese la cantidad de metros comprados.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInput" class="col-sm-3 col-form-label">Precio metros</label>
                        <div class="col-sm-9">
                            <input type="text" name="precioMateria" class="form-control" id="precioMateria" placeholder="Ingrese el precio de la materia prima comprada.">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Materia prima registrada</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered ">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Descripci&oacute;n</th>
                                    <th>Metros</th>
                                    <th>Precio</th>
                                    <th>Acci&oacute;n</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = $conexion->query("SELECT * FROM materia_prima");
                                while ($row = mysqli_fetch_array($query)) {
                                    echo "<tr>
                                            <td>" . $row["id"] . "</td>
                                            <td>" . utf8_encode($row["descripcion"]) . "</td>
                                            <td>" . utf8_encode($row["metros"]) . "</td>
                                            <td>" . utf8_encode("$ " . $row["precio"]) . "</td>
                                            <td>
                                                <a class='btn btn-danger' onclick='eliminarMateriaPrima(" . $row["id"] . ")'><i class='fas fa-trash'></i></a>
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