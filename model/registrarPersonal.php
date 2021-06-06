<?php

require_once 'Conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$identificacion = $_POST['identificacion'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$contrasena = $_POST['contrasena'];
$rol = $_POST['rol'];

$sql = $conexion->query("INSERT INTO persona (id, nombre, apellido, identificacion, fecha_nacimiento, contrasena, estado, rol) 
VALUES (NULL, '$nombre', '$apellido', '$identificacion', '$fecha_nacimiento', '$contrasena', '1', '$rol')");

if ($sql) {
    $respuesta = array('respuesta' => 'exito');
} else {
    $respuesta = array('respuesta' => 'error');
}

echo json_encode($respuesta);

mysqli_close($conexion);
