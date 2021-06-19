<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Productos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                    <li class="breadcrumb-item active">Productos</li>
                </ol>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-4">
                <a type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-producto">Registrar producto</a>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Modal para registrar producto -->
<div class="modal fade" id="modal-producto">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar producto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="FormRegistrarProducto" id="FormRegistrarProducto" method="POST">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="exampleInput" class="col-sm-4 col-form-label">Descripci&oacute;n</label>
                        <div class="col-sm-8">
                            <input type="text" name="producto" class="form-control" id="producto" placeholder="Ingrese una descripci&oacute;n del producto.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInput" class="col-sm-4 col-form-label">Cantidad</label>
                        <div class="col-sm-8">
                            <input type="text" name="cantidadProducto" class="form-control" id="cantidadProducto" placeholder="Ingrese una cantidad.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInput" class="col-sm-4 col-form-label">Precio Unitario</label>
                        <div class="col-sm-8">
                            <input type="text" name="precioUnitarioProducto" class="form-control" id="precioUnitarioProducto" placeholder="Ingrese el precio unitario.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInput" class="col-sm-4 col-form-label">Materia prima</label>
                        <div class="col-sm-8">
                            <select class="custom-select rounded-0" name="materiaPrimaProducto" id="materiaPrimaProducto">
                                <option value="seleccione">-Seleccione-</option>
                                <?php
                                $query = $conexion->query("SELECT * FROM materia_prima");
                                while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="' . $valores['id'] . '">' . utf8_encode($valores['descripcion']) . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInput" class="col-sm-4 col-form-label">Categoria</label>
                        <div class="col-sm-8">
                            <select class="custom-select rounded-0" name="categoriaProducto" id="categoriaProducto">
                                <option value="seleccione">-Seleccione-</option>
                                <?php
                                $query = $conexion->query("SELECT * FROM categoria");
                                while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="' . $valores['id'] . '">' . utf8_encode($valores['descripcion']) . '</option>';
                                }
                                ?>
                            </select>
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
                        <h3 class="card-title">Productos registrados</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered ">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Categoria</th>
                                    <th>Descripci&oacute;n</th>
                                    <th>Cantidad</th>
                                    <th>Acci&oacute;n</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = $conexion->query("SELECT p.id, c.descripcion AS categoria, p.descripcion, p.cantidad FROM producto p INNER JOIN categoria c 
                                ON p.categoria = c.id ORDER BY p.id ASC");
                                while ($row = mysqli_fetch_array($query)) {
                                    echo "<tr>
                                            <td>" . $row["id"] . "</td>
                                            <td>" . $row["categoria"] . "</td>
                                            <td>" . $row["descripcion"] . "</td>
                                            <td>" . $row["cantidad"] . "</td>
                                            <td>
                                                <a class='btn btn-danger' onclick='eliminarProducto(" . $row["id"] . ")'><i class='fas fa-trash'></i></a>
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