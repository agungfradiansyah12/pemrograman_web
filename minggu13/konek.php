<?php
$host = "LAPTOP-NAI7KAP6";
$connInfo = array("Database" => "prakwebdb", "UID" => "", "PWD" => "");
$conn = sqlsrv_connect($host, $connInfo);

if ($conn) {
    echo "Koneksi berhasil";
} else {
    echo "Koneksi gagal";
    die(print_r(sqlsrv_errors(), true));
}
