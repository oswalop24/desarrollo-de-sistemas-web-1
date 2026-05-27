<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Captura de Datos Personales</title>
    <link rel="stylesheet" href="styles.css">
    <script src="app.js"></script>
</head>
<body>
    <div class="dive">
        <h1>Captura de Datos Personales</h1>
        <br>
        <h2>INGRESA LOS DATOS QUE SE TE PIDEN</h2>
        <br>
        <p>Mi primera encuesta</p>
        <hr>

        <form action="resultados.php" method="POST" onsubmit="mensajeExito()">
            <label for="Name">Nombre</label>
            <input type="text" name="nombre" placeholder="Ingresa tu nombre" required>
            <hr>

            <label for="Edad">Edad</label>
            <input type="number" name="edad" placeholder="Tu edad" required>
            <hr>

            <label for="Ciudad">Ciudad donde vives</label>
            <input type="text" name="ciudad" placeholder="Tu ciudad" required>
            <hr>

            <label for="Fecha">Fecha de Nacimiento</label>
            <input type="date" name="fecha" required>
            <hr>

            <label for="Pasatiempo">Pasatiempo favorito</label>
            <input type="text" name="pasatiempo" placeholder="Tu pasatiempo" required>
            <hr>

            <button type="submit">¡Ingresamos Datos!</button>
        </form>
    </div>
</body>
</html>