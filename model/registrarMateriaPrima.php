<?php 

require_once 'Conexion.php';

$descripcion = $_POST['descripcionMateria'];
$metros = $_POST['metrosMateria'];
$precio = $_POST['precioMateria'];

if (empty($descripcion)) {
    $respuesta = array('respuesta' => 'vacio');
} else if (empty($metros)) {
    $respuesta = array('respuesta' => 'vacio');
} else if (empty($precio)) {
    $respuesta = array('respuesta' => 'vacio');
} else {
    $sql = $conexion->query("INSERT INTO materia_prima (id, descripcion, metros, precio) VALUES (NULL, '$descripcion', '$metros', '$precio')");

    if ($sql) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
}

echo json_encode($respuesta);

mysqli_close($conexion);