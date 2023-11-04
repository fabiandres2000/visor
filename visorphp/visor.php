<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: Content-Type");

    include_once("conexion.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $selectedItem = $_POST['selectedItem'];
        $observacionesItem = $_POST['observacionesItem'];
        
        $consulta_existencia = "SELECT COUNT(*) AS num_rows FROM observaciones WHERE selectedItem = '$selectedItem'";
        $resultado_existencia = $conexion->query($consulta_existencia);
        $fila_existencia = $resultado_existencia->fetch_assoc();
        
        if ($fila_existencia['num_rows'] == 0) {
            $sql = "INSERT INTO observaciones (selectedItem, observacionesItem) VALUES ('$selectedItem', '$observacionesItem')";
            $conexion->query($sql);
        } 

        $folderPath = $selectedItem;
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0777, true);
        }

        foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
            $file_name = $_FILES['files']['name'][$key];
            $file_tmp = $_FILES['files']['tmp_name'][$key];
            move_uploaded_file($file_tmp, $folderPath . '/' . $file_name);
        }

        echo 'Archivos subidos exitosamente.';
    }
?>