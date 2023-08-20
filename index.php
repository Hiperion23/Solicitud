<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Gestión</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .animated-icon {
            font-size: 140px;
            animation: bounce 1s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .btn-animate {
            animation: fadeInUp 1s ease-in-out;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        body {
            font-family: 'Arial', sans-serif;
        }

        .center-screen {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        a {
            font-family: Verdana;
            font-size: 30px;
        }

        h1 {
            font-family: 'Courier New', Courier, monospace;
            font-size: 50px;
        }
    </style>
</head>
<body>
    <div class="center-screen">
        <div class="container text-center">
            <h1 class="display-4 mb-4">Bienvenido al Sistema de Gestión</h1>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <a href="agregar_solicitante.php" class="btn btn-primary btn-lg btn-animate">
                        <span class="animated-icon">&#128102;</span>
                        Agregar Solicitante
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="agregar_obra.php" class="btn btn-primary btn-lg btn-animate">
                        <span class="animated-icon">&#128218;</span>
                        Agregar Obra
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="agregar_autor.php" class="btn btn-primary btn-lg btn-animate">
                        <span class="animated-icon">&#128100;</span>
                        Agregar Autor
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="agregar_productor.php" class="btn btn-primary btn-lg btn-animate">
                        <span class="animated-icon">&#128196;</span>
                        Agregar Productor
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
