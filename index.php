<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            margin-top: 50px;
            max-width: 500px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
        .form-container p {
            margin-bottom: 30px;
            color: #6c757d;
        }
        .form-container .form-control {
            border-radius: 25px;
            padding: 15px;
        }
        .form-container .btn {
            border-radius: 25px;
            padding: 10px 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container mx-auto bg-light">
            <h2>Hola</h2>
            <p>Inicia el registro</p>
            <form method="post">
                <div class="mb-3">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                </div>
                <div class="mb-3">
                    <input type="email" name="correo" class="form-control" placeholder="Correo">
                </div>
                <div class="mb-3">
                    <input type="password" name="contraseña" class="form-control" placeholder="Contraseña">
                </div>
                <div class="mb-3">
                    <input type="text" name="direccion" class="form-control" placeholder="Dirección">
                </div>
                <div class="mb-3">
                    <input type="text" name="telefono" class="form-control" placeholder="Teléfono">
                </div>
                <button type="submit" name="register" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <script src="validaciones.js"></script>
    <?php
        include("registrar.php");
    ?>
</body>
</html>

