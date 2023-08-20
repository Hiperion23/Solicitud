<?php
include "Conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $titulo = $_POST["titulo"];
    $esPublica = $_POST["es_publica"];
    $esDeriva = $_POST["es_deriva"];
    $pais = $_POST["pais"];
    $fechaTermino = $_POST["fecha_termino"];
    $fechaPublicacion = $_POST["fecha_publicacion"];
    $idSolicitante = $_POST["id_solicitante"];

    // Realizar la consulta de inserción en la tabla Obra
    $query = "INSERT INTO Obra (Titulo, Es_Publica, Es_Deriva, Pais, Fecha_Termino, Fecha_Publicacion, id_Solicitante) VALUES ('$titulo', $esPublica, $esDeriva, '$pais', '$fechaTermino', '$fechaPublicacion', $idSolicitante)";
    
    if ($conexion->query($query)) {
        // Mostrar una alerta y redirigir a la página de agregar_obra.php
        echo "<script>alert('Guardado correctamente'); window.location.href = 'agregar_obra.php';</script>";
    } else {
        // Mostrar una alerta y redirigir a la página de agregar_obra.php
        echo "<script>alert('Error al guardar'); window.location.href = 'agregar_obra.php';</script>";
    }
} else {
    // Redirigir si el formulario no fue enviado correctamente
    header("Location: agregar_obra.php");
}
?>
