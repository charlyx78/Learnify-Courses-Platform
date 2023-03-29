<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnify - Perfil</title>
    <?php include ('../styles.php'); ?>
</head>
<body>

<?php include('../navbar.php'); 
include('../Programa/cuenta.php');?>

    <main class="container contenido mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-4 d-flex justify-content-center">
                <section class="foto-perfil-cuenta">
                    <img src="../Imagenes/avatar.svg" class="rounded-circle mb-3" height="150" width="150" alt="Foto de perfil">
                </section>
            </div>
            <div class="col-12 col-lg-8">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value=<?php echo$_SESSION['nombre'] ?>>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="apellidoPaterno">Apellido paterno</label>
                            <input type="text" name="apellidoPaterno" class="form-control" value=<?php echo$_SESSION['apellidoPaterno'] ?>>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label for="apellidoMaterno">Apellido materno</label>
                            <input type="text" name="apellidoMaterno" class="form-control" value=<?php echo$_SESSION['apellidoMaterno'] ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="genero">Género</label>
                            <select class="form-select mb-2" name="genero" id="genero" aria-label="Default select example" oninput="removerError(event)"> 
                                <option selected value="<?php echo$_SESSION['genero'] ?>"><?php echo$_SESSION['genero'] ?></option>
                                <option value="hombre">Hombre</option>
                                <option value="mujer">Mujer</option>
                                <option value="otro">Otro...</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="fechaNacimiento">Fecha de nacimiento</label>
                            <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control mb-2" oninput="removerError(event)" value=<?php echo$_SESSION['fechaNacimiento'] ?>>
                        </div>
                    </div>
                    <?php if ($noHacer == 0) { ?>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <label for="apellidoPaterno">Contraseña</label>
                            <input type="password" name="contrasena" class="form-control" value=<?php echo$_SESSION['contrasena'] ?>>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <label for="apellidoPaterno">Confirmar contraseña</label>
                            <input type="password" name="ccontrasena" class="form-control">
                        </div>
                    </div>
                    <?php }?> 
                    <div class="row">
                        <input class="btn boton-secundario" type="submit" name="BotonEditar" value="Editar Informacion">
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php include ('../footer.php'); ?>
    <?php if ($_SESSION['contrasena'] != "") { ?>
    <script src="../script.js"></script>
    <?php }?> 
</body>
</html>