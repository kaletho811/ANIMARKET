<?php
$host = "localhost";
$user = "u873249565_animarket"; // El usuario que crearon
$pass = "T?LGCQ1T1&g";
$db   = "u873249565_db_animarket"; // El nombre de la DB

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
// echo "¡Conexión exitosa!"; // Solo para probar
?>