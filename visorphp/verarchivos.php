<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

if (isset($_GET['folderName'])) {
    $folderName = $_GET['folderName'];
    $folderPath = __DIR__ . '/' . $folderName;

    if (is_dir($folderPath)) {
        $files = array_diff(scandir($folderPath), array('..', '.'));
        $fileNames = array_values($files);

        echo json_encode($fileNames);
    } else {
        echo json_encode(array());
    }
} else {
    echo json_encode(array());
}
?>
