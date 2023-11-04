<?php
    /*
    $host = 'localhost';
    $usuario = 'zdpvxtxl_root';
    $contrasena = 'cuentafalsa17';
    $base_de_datos = 'zdpvxtxl_prueba';
   */
    
    $host = 'localhost:3306';
    $usuario = 'root';
    $contrasena = 'cuentafalsa17-A';
    $base_de_datos = 'visor';
    
    
    $conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

    if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
    }

?>
