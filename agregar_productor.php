<!DOCTYPE html>
<html>
<head>
    <title>Agregar Productor</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="tel"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-success {
            background-color: #2ecc71;
            border: none;
            border-radius: 5px;
            padding: 12px 24px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-success:hover {
            background-color: #27ae60;
        }

        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
    </style></head>
<body>
    <div class="container animated-form">
        <h1>Agregar Nuevo Productor</h1>
        <form action="procesar_productor.php" method="POST">
            <div class="form-group">
                <label for="nombre_razon_social">Nombre o Razón Social:</label>
                <input type="text" class="form-control" id="nombre_razon_social" name="nombre_razon_social" required>
            </div>
            <div class="form-group">
                <label for="documento">Documento:</label>
                <input type="text" class="form-control" id="documento" name="documento" maxlength="500">
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion">
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
            <button type="submit" class="btn btn-success btn-block">Agregar Productor</button>
        </form>
    </div>
</body>
</html>
