<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnify - Mensajes</title>
    <?php include ('../styles.php'); ?>
</head>
<body>

<?php include('../navbar.php'); ?>
|   <main class="contenido container">
        <div class="contenedor-leccion mb-4">
            <div class="contenido-leccion w-100 border border-secondary" style="height: 70vh;">
                <!-- si es video -->
                <video class="w-100 h-100" src="" controls></video>
            </div>
        </div>
        <div class="contenedor-botones-leccion d-flex justify-content-between">
            <button class="btn btn-lg boton-secundario">Anterior</button>
            <button class="btn btn-lg boton-terciario">Enviar mensaje al profesor</button>
            <button class="btn btn-lg boton-secundario">Siguiente</button>
        </div>
    </main>
<?php include ('../footer.php'); ?>
    
</body>
</html>