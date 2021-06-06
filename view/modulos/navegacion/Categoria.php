<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Categoria</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                    <li class="breadcrumb-item active">Categoria</li>
                </ol>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-4">
                <a type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-default">Registrar categoria</a>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Modal para registrar categoria -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Registrar categoria</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form name="FormRegistrarCategoria" id="FormRegistrarCategoria" method="POST">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="exampleInput" class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" name="categoria" class="form-control" id="categoria" placeholder="Ingrese el nombre de la categoria">
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
                        <h3 class="card-title">Categorias registradas</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Categoria</th>
                                    <th>Acci&oacute;n</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = $conexion->query("SELECT * FROM categoria");
                                while ($row = mysqli_fetch_array($query)) {
                                    echo "<tr>
                                            <td>" . $row["id"] . "</td>
                                            <td>" . $row["descripcion"] . "</td>
                                            <td><a class='btn btn-danger' onclick='eliminarCuentaBancaria(" . $row["id"] . ")'><i class='fas fa-trash'></i></a></td>
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