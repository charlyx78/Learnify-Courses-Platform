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

    <main class="container-sm contenido contenido-mensaje">
        <div class="card">
            <div class="card-title shadow-sm d-flex justify-content-start align-items-center gap-3 p-3">
                <a href="mensajes.php"><i class="bi bi-chevron-left icono-volver"></i></a>
                <img src="../Imagenes/avatar.svg" class="rounded-circle" height="45" width="45" alt="">
                <h3>charlyx78</h3>
            </div>
            <div class="card-body contenedor-chat">
                <div style="max-height: 100%; overflow-y: scroll;">
                <div class="row contenido-chat" style="max-width: 100%;">
                    <div class="w-100 d-flex justify-content-start">
                        <div class="mensaje-usuario col-12 col-md-5 pe-5 align-self-start">
                            <div class="d-flex gap-2">
                                <img src="../Imagenes/avatar.svg" class="rounded-circle" height="30" width="30" alt="">
                                <p class="bg-terciario p-2 mb-1 rounded">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque deserunt maiores ut reprehenderit officiis, modi quam voluptates iste eveniet unde nemo at iure sed sunt doloremque, nulla aliquam. Facere, at?
                                </p>
                            </div>
                            <p class="text-secondary text-end">28 Feb 2023 | 19:47</p>
                        </div>
                    </div>
                    <div class="w-100 d-flex justify-content-end">
                        <div class="tu-mensaje col-12 col-md-5 ps-5 align-self-end ">
                            <div class="d-flex gap-2">
                                <p class="bg-light p-2 mb-1 rounded">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque deserunt maiores ut reprehenderit officiis, modi quam voluptates iste eveniet unde nemo at iure sed sunt doloremque, nulla aliquam. Facere, at?
                                </p>
                                <img src="../Imagenes/avatar.svg" class="rounded-circle" height="30" width="30" alt="">
                            </div>
                            <p class="text-secondary text-start">28 Feb 2023 | 19:47</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="card-footer">
                <form action="" class="mensaje">
                    <div class="d-flex align-items-start gap-2">
                        <textarea name="mensaje" class="form-control w-100 h-auto" placeholder="Escribe un mensaje..."></textarea>
                        <button type="submit" class="btn boton-secundario"><i class="bi bi-send-fill"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    
    <?php include ('../footer.php'); ?>
    <script src="../script.js"></script>
    
</body>
</html>