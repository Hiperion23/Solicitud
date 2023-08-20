<?php
include "Conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $apPaterno = $_POST["ap_paterno"];
    $apMaterno = $_POST["ap_materno"];
    $nombres = $_POST["nombres"];
    $dni = $_POST["dni"];
    $fechaNac = $_POST["fecha_nac"];
    $fechaDet = $_POST["fecha_det"];
    $pais = $_POST["pais"];
    $domicilio = $_POST["domicilio"];
    $idObra = $_POST["id_obra"];

    // Realizar la consulta de inserción en la tabla Autores
    $query = "INSERT INTO Autores (Ap_Paterno, Ap_Materno, Nombres, DNI, Fecha_Nac, Fecha_Det, Pais, Domicilio, id_Obra) VALUES ('$apPaterno', '$apMaterno', '$nombres', '$dni', '$fechaNac', '$fechaDet', '$pais', '$domicilio', $idObra)";
    
    if ($conexion->query($query)) {
        // Mostrar una alerta y redirigir a la página de agregar_autor.php
        echo "<script>alert('Guardado correctamente'); window.location.href = 'agregar_autor.php';</script>";
    } else {
        // Mostrar una alerta y redirigir a la página de agregar_autor.php
        echo "<script>alert('Error al guardar'); window.location.href = 'agregar_autor.php';</script>";
    }
} else {
    // Redirigir si el formulario no fue enviado correctamente
    header("Location: agregar_autor.php");
}
?>
