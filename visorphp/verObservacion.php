<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

include_once("conexion.php");

$itemVer = $_GET['itemVer'];

$sql = "SELECT * FROM observaciones WHERE selectedItem='$itemVer'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $dato = mysqli_fetch_array($resultado);
    $observacionesItem = $dato['observacionesItem'];
} else {
    $observacionesItem = "no tiene observaciones";
}

echo $observacionesItem;

?>
