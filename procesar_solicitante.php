<?php
include "Conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];

    // Realizar la consulta de inserción en la tabla Solicitante
    $query = "INSERT INTO Solicitante (Nombre, Apellido, Direccion, Telefono) VALUES ('$nombre', '$apellido', '$direccion', '$telefono')";
    
    if ($conexion->query($query)) {
        // Redirigir a la página de éxito o donde desees
        header("Location: agregar_solicitante.php?mensaje=success");
    } else {
        // Redirigir a la página de error o donde desees
        header("Location: agregar_solicitante.php?mensaje=error");
    }
} else {
    // Redirigir si el formulario no fue enviado correctamente
    header("Location: agregar_solicitante.php");
}
?>
