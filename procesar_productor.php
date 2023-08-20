<?php
include "Conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombreRazonSocial = $_POST["nombre_razon_social"];
    $documento = $_POST["documento"];
    $direccion = $_POST["direccion"];
    $idObra = $_POST["id_obra"];

    // Realizar la consulta de inserción en la tabla Productor
    $query = "INSERT INTO Productor (NombreRazonSocial, Documento, Direccion, id_Obra) VALUES ('$nombreRazonSocial', '$documento', '$direccion', $idObra)";
    
    if ($conexion->query($query)) {
        // Mostrar una alerta y redirigir a la página de agregar_productor.php
        echo "<script>alert('Guardado correctamente'); window.location.href = 'agregar_productor.php';</script>";
    } else {
        // Mostrar una alerta y redirigir a la página de agregar_productor.php
        echo "<script>alert('Error al guardar'); window.location.href = 'agregar_productor.php';</script>";
    }
} else {
    // Redirigir si el formulario no fue enviado correctamente
    header("Location: agregar_productor.php");
}
?>
