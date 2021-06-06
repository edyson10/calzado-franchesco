<?php

require_once 'Conexion.php';

$categoria = $_POST['categoria'];

if (empty($categoria)) {
    $respuesta = array('respuesta' => 'vacio');
} else {
    $sql = $conexion->query("INSERT INTO categoria (id, descripcion) VALUES (NULL, '$categoria')");

    if ($sql) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
}

echo json_encode($respuesta);

mysqli_close($conexion);
