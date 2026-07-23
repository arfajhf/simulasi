<?php

$host = "localhost";
$user = "root";
$password = "root";
$database = "simulasi_chils";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die(json_encode([
        "status" => false,
        "message" => "Koneksi gagal"
    ]));
}

$conn->set_charset("utf8");