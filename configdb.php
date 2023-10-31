<?php
    //DATOS PARA LA CONEXION A LA BASE DE DATOS
    $host = '2daw.esvirgua.com';
    $usuario = 'user2daw_04';
    $password = '1Z~%4D+*9BTc';
    $base_de_datos = 'user2daw_BD2-04';
    
    //CREAR LA CONEXION
    $conexion = new mysqli($host, $usuario, $password, $base_de_datos);

    //COMPRUEBA SI HAY ERRORES EN LA CONEXION
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
?>