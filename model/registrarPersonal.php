<?php

require_once 'Conexion.php';

$nombre = $_POST['nombrePersonal'];
$apellido = $_POST['apellidoPersonal'];
$identificacion = $_POST['identificacionPersonal'];
$fecha_nacimiento = $_POST['fechaNacimientoPersonal'];
$contrasena = $_POST['contrasenaPersonal'];
$repContrasena = $_POST['repContrasenaPersonal'];
$rol = $_POST['rolPersonal'];

if ($contrasena != $repContrasena) {
    $respuesta = array('respuesta' => 'nocontrasena');
} else {
    $sql = $conexion->query("INSERT INTO persona (id, nombre, apellido, identificacion, fecha_nacimiento, contrasena, estado, rol) 
    VALUES (NULL, '$nombre', '$apellido', '$identificacion', '$fecha_nacimiento', '$contrasena', '1', '$rol')");

    if ($sql) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
}

echo json_encode($respuesta);

mysqli_close($conexion);
