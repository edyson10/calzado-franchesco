<?php

// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try {
    /* CONEXION CON EL SERVIDOR LOCAL */
    //$conexion = mysqli_connect("localhost","root","","calzado_franchesco");
    /* CONEXION CON EL SERVIDOR REMOTO */
    $conexion = mysqli_connect("3.83.134.201","admin","edyson10","calzado_franchesco");
    //echo "Connected successfully";
} catch (PDOException $error) {
    echo 'Connection error: ' . $error->getMessage();
}