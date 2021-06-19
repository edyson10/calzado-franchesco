<?php

require_once 'Conexion.php';

$producto = $_POST['producto'];
$cantidad = $_POST['cantidadProducto'];
$precio = $_POST['precioUnitarioProducto'];
$categoria = $_POST['categoriaProducto'];
$materia_prima = $_POST['materiaPrimaProducto'];

if (empty($producto)) {
    $respuesta = array('respuesta' => 'vacio');
} else if (empty($cantidad)) {
    $respuesta = array('respuesta' => 'vacio');
} else if (empty($precio)) {
    $respuesta = array('respuesta' => 'vacio');
} else {
    $sql = $conexion->query("INSERT INTO producto (id, descripcion, cantidad, precioUnitario, categoria, materia_prima) 
    VALUES (NULL, '$producto', '$cantidad', '$precio', '$categoria', '$materia_prima')");

    if ($sql) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
}

echo json_encode($respuesta);

mysqli_close($conexion);
