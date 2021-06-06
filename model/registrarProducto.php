<?php

require_once 'Conexion.php';

$categoria = $_POST['categoria'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];

if (empty($categoria)) {
    $respuesta = array('respuesta' => 'vacio');
} else {
    $sql = $conexion->query("INSERT INTO producto (id, categoria, descripcion, cantidad) VALUES (NULL, '$categoria', '$descripcion', '$cantidad')");

    if ($sql) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
}

echo json_encode($respuesta);

mysqli_close($conexion);
