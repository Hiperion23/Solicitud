<!DOCTYPE html>
<html>
<head>
    <title>Agregar Obra</title>
    <style>
        /* Estilos personalizados */
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .form-container h1 {
            color: #343a40;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background: url('arrow_down.png') no-repeat right;
            background-size: 20px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Agregar Obra</h1>
        <form action="procesar_obra.php" method="POST">
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="es_publica">Es Pública:</label>
                <select id="es_publica" name="es_publica" required>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="es_deriva">Es Derivada:</label>
                <select id="es_deriva" name="es_deriva" required>
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pais">País:</label>
                <input type="text" id="pais" name="pais" required>
            </div>
            <div class="form-group">
                <label for="fecha_termino">Fecha de Término:</label>
                <input type="date" id="fecha_termino" name="fecha_termino" required>
            </div>
            <div class="form-group">
                <label for="fecha_publicacion">Fecha de Publicación:</label>
                <input type="date" id="fecha_publicacion" name="fecha_publicacion" required>
            </div>
            <div class="form-group">
                <label for="id_solicitante">Solicitante:</label>
                <select id="id_solicitante" name="id_solicitante" required>
                    <?php
                    include "Conexion.php";
                    $query = "SELECT id_Solicitante, Nombre, Apellido FROM Solicitante";
                    $result = mysqli_query($conexion, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['id_Solicitante'] . "'>" . $row['Nombre'] . " " . $row['Apellido'] . "</option>";
                    }

                    mysqli_close($conexion);
                    ?>
                </select>
            </div>
            <button type="submit">Agregar Obra</button>
        </form>
    </div>
</body>
</html>
