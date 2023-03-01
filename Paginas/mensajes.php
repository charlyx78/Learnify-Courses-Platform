<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnify - Mensajes</title>
    <?php include ('../styles.php'); ?>
</head>
<body>

    <?php include('../navbar.php'); ?>

    <main class="container-sm contenido">
        <h3 class="mb-4">Mensajes</h3>
        <div class="usuarios-mensajes">
            <ul class="list-group">
                <a class="list-group-item" href="mensajesChat.php">
                    <div class="row">
                        <div class="col-1 avatar-mensaje"><img src="../Imagenes/avatar.svg" class="rounded-circle" width="45" height="45" alt="Avatar"></div>
                        <div class="col-11">
                            <div class="d-flex justify-content-between align-items-end mb-1">
                                <h6 class="m-0">charlyx78</h6>
                                <p class="m-0 text-secondary">01/03/2023</p>
                            </div>
                            <p class="m-0 text-secondary d-flex justify-content-between align-items-center">
                                Mensaje preview
                                <span class="badge bg-danger">1</span>
                            </p>
                        </div>
                    </div>
                </a>
            </ul>
        </div>
    </main>

    <?php include ('../footer.php'); ?>
    <script src="../script.js"></script>
    
</body>
</html>