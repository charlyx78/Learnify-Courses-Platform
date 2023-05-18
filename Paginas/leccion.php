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
        <div class="contenedor-leccion mb-2">
            <div class="contenedor-botones-leccion btn-group d-flex justify-content-between mb-3">
                <button class="btn btn-lg borde-secundario">Anterior</button>
                <button class="btn btn-lg borde-terciario">Enviar mensaje al profesor</button>
                <button class="btn btn-lg borde-secundario">Siguiente</button>
            </div>
            <div class="contenido-leccion w-100 border border-secondary mb-4" style="height: 60vh;">
                <!-- si es video -->
                <video class="w-100 h-100" src="" controls></video>
            </div>
            <div class="descripcion-contenido-leccion">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio possimus deserunt eum blanditiis pariatur praesentium perferendis ea fugit itaque iusto dolor, quaerat magnam tempore labore quos ut unde? Magni, dicta.</p>
        </div>
        </div>
    </main>
<?php include ('../footer.php'); ?>
    
</body>
</html>