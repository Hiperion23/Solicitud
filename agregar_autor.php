<!DOCTYPE html>
<html>
<head>
    <title>Agregar Autor</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-success {
            background-color: #4caf50;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-success:hover {
            background-color: #45a049;
        }

        /* Animación */
        @keyframes slideIn {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
        }

        .animated-form {
            animation: slideIn 0.5s forwards;
        }
    </style>
</head>
<body>
    <div class="container animated-form">
        <h1>Agregar Nuevo Autor</h1>
        <form action="procesar_autor.php" method="POST">
            <div class="form-group">
                <label for="ap_paterno">Apellido Paterno:</label>
                <input type="text" class="form-control" id="ap_paterno" name="ap_paterno" required>
            </div>
            <div class="form-group">
                <label for="ap_materno">Apellido Materno:</label>
                <input type="text" class="form-control" id="ap_materno" name="ap_materno">
            </div>
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" class="form-control" id="nombres" name="nombres" required>
            </div>
            <div class="form-group">
                <label for="dni">DNI:</label>
                <input type="text" class="form-control" id="dni" name="dni" maxlength="10">
            </div>
            <div class="form-group">
                <label for="fecha_nac">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="fecha_nac" name="fecha_nac">
            </div>
            <div class="form-group">
                <label for="fecha_det">Fecha de Defunción:</label>
                <input type="date" class="form-control" id="fecha_det" name="fecha_det">
            </div>
            <div class="form-group">
                <label for="pais">País:</label>
                <input type="text" class="form-control" id="pais" name="pais">
            </div>
            <div class="form-group">
                <label for="domicilio">Domicilio:</label>
                <input type="text" class="form-control" id="domicilio" name="domicilio">
            </div>
            <div class="form-group">
                <label for="id_obra">Obra Asociada:</label>
                <select class="form-control" id="id_obra" name="id_obra">
                    <?php
                    // Conexión a la base de datos y consulta de obras
                    include "Conexion.php";
                    $query = "SELECT id_Obra, Titulo FROM Obra";
                    $result = mysqli_query($conexion, $query);

                    // Generar opciones del menú desplegable con títulos de obras
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['id_Obra'] . "'>" . $row['Titulo'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-success btn-block">Agregar Autor</button>
        </form>
    </div>
</body>
</html>
