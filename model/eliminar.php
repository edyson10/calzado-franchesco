<?php

require_once 'Conexion.php';

if ($_POST['eliminar'] == 'eliminaMateriaPrima') {
    $id = $_POST['id'];
    $sql = "DELETE FROM materia_prima WHERE id = '$id'";
    $ejecutar = mysqli_query($conexion, $sql);
    if ($ejecutar) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
    echo json_encode($respuesta);
} else if ($_POST['eliminar'] == 'eliminaPersonal'){
    $id = $_POST['id'];
    $sql = "UPDATE persona SET estado = '2' WHERE id = '$id'";
    $ejecutar = mysqli_query($conexion, $sql);
    if ($ejecutar) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
    echo json_encode($respuesta);
} else if ($_POST['eliminar'] == 'eliminarCategoria'){
    $id = $_POST['id'];
    $sql = "DELETE FROM categoria WHERE id = '$id'";
    $ejecutar = mysqli_query($conexion, $sql);
    if ($ejecutar) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
     echo json_encode($respuesta);
} else if ($_POST['eliminar'] == 'eliminarProducto'){
    $id = $_POST['id'];
    $sql = "DELETE FROM producto WHERE id = '$id'";
    $ejecutar = mysqli_query($conexion, $sql);
    if ($ejecutar) {
        $respuesta = array('respuesta' => 'exito');
    } else {
        $respuesta = array('respuesta' => 'error');
    }
     echo json_encode($respuesta);
}

mysqli_close($conexion);