<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

require_once "config/database.php";

$sql = "SELECT * FROM data_analisis_kategori";

$result = $conn->query($sql);

$data = [];

while($row = $result->fetch_assoc()){
    $data[] = $row;
}

echo json_encode([
    "status" => true,
    "total" => count($data),
    "data" => $data
], JSON_PRETTY_PRINT);