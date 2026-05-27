<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados de datos!</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="dive2">
        <h1>Resultados</h1>
        
        <div style="text-align: left; padding: 20px;">
            <?php
                $nombre = $_POST['nombre'] ?? 'No definido';
                $edad = $_POST['edad'] ?? 'No definida';
                $ciudad = $_POST['ciudad'] ?? 'No definida';
                $fecha = $_POST['fecha'] ?? 'No definida';
                $pasatiempo = $_POST['pasatiempo'] ?? 'No definido';

                echo "<p><strong>Nombre:</strong> $nombre</p>";
                echo "<p><strong>Edad:</strong> $edad años</p>";
                echo "<p><strong>Ciudad:</strong> $ciudad</p>";
                echo "<p><strong>Fecha de Nacimiento:</strong> $fecha</p>";
                echo "<p><strong>Pasatiempo:</strong> $pasatiempo</p>";
            ?>
        </div>

        <img src="pusheen.gif" alt="Éxito">
        <br>
        <h2>¡BIEN HECHO!</h2>
        <br>
        <a href="index.php" style="text-decoration: none; color: #007aff; font-weight: bold;">Volver al formulario</a>
    </div>
</body>
</html>