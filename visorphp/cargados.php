<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

include_once("conexion.php");

$sql = "SELECT selectedItem FROM observaciones";

$resultado = $conexion->query($sql);

$datos = array();
while ($fila = $resultado->fetch_assoc()) {
    $datos[] = $fila["selectedItem"];
}

// Cerrar la conexión a la base de datos
$conexion->close();

// Devolver los datos como una respuesta JSON
header("Content-Type: application/json");
echo json_encode($datos);

?>
