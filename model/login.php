<?php

require_once 'Conexion.php';

//die(json_encode($_POST));

$identificacion = $_POST['user'];
$contraseña = $_POST['password'];
$rol = $_POST['rol'];

if ($rol == 'seleccione') {
    $respuesta = array('respuesta' => 'seleccion');
    echo json_encode($respuesta);
    return;
} else {
    $sql = "SELECT p.nombre, p.apellido, p.identificacion, p.fecha_nacimiento, p.estado, r.descripcion AS rol FROM persona p INNER JOIN rol r ON p.rol = r.id 
    WHERE p.identificacion = '$identificacion' and p.contrasena = '$contraseña' and p.rol = '$rol' and p.estado = '1'";

    $ejecutar = mysqli_query($conexion, $sql);
    $rowcount = mysqli_num_rows($ejecutar);
    if ($rowcount > 0) {
        $row = $ejecutar->fetch_array(MYSQLI_ASSOC);
        if ($row['estado'] == '1') {
            session_start();
            $_SESSION['documento'] = $row['identificacion'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['apellido'] = $row['apellido'];
            $_SESSION['fecha_nacimiento'] = $row['fecha_nacimiento'];
            $_SESSION['rol'] = $row['rol'];
            $_SESSION['estado'] = $row['estado'];
            $respuesta = array('respuesta' => 'exito');
        } else {
            $respuesta = array('respuesta' => 'estado');
        }
    } else {
        $respuesta = array('respuesta' => 'error');
    }
    echo json_encode($respuesta);
}

mysqli_close($conexion);
