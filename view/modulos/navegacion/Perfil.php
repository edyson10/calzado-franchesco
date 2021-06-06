<?php

$documento = $_SESSION['documento'];

$sql = "SELECT p.nombre, p.apellido, p.identificacion, p.fecha_nacimiento, p.estado, r.descripcion AS rol FROM persona p INNER JOIN rol r ON p.rol = r.id 
WHERE p.identificacion = '$documento'";

$ejecutar = mysqli_query($conexion, $sql);
$row = $ejecutar->fetch_array(MYSQLI_ASSOC);

$identificacion = $row['identificacion'];
$nombre = $row['nombre'];
$apellido = $row['apellido'];
$fecha_nacimiento = $row['fecha_nacimiento'];
$rol = "Administrador";

if ($row['estado'] == '1') {
    $estado = "Activo";
} else {
    $estado = "Inactivo";
}

?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Perfil</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="Administracion">Inicio</a></li>
                    <li class="breadcrumb-item active">Perfil</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <?php $imagen = "view/presentacion/img/avatar5.png"; ?>
                            <img class="profile-user-img img-fluid img-circle" src="<?php echo $imagen ?>" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><?php echo $nombre . " " .  $apellido ?></h3>

                        <p class="text-muted text-center"><?php echo $rol; ?></p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Documento</b> <a class="float-right"><?php echo $identificacion; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Fecha nacimiento</b> <a class="float-right"><?php echo $fecha_nacimiento; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Estado</b> <a class="float-right"><?php echo $estado; ?></a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>