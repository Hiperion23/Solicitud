<?php
// Conexion.php
$servername = "localhost";
$username = "root";
$password = "";
$database = "solicitud";

// Crear la conexión a la base de datos
$conexion = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

return $conexion; // Devolver el objeto de conexión
?>
