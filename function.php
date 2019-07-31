<?php
function readFileJson($filePath){
    $dataJson = file_get_contents($filePath);
    return json_decode($dataJson, true);
}

function saveFileJson($user, $filePath) {
    $dataFile = readFileJson($filePath);
    array_push($dataFile, $user);
    $dataNewJson = json_encode($dataFile);
    file_put_contents($filePath, $dataNewJson);
}