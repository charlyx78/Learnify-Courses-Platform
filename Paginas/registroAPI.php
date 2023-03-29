<?php include('../Programa/PregistroAPI.php'); 


$query = "select * from usuarios where correo = '$email'";
$result2= mysqli_query($con, $query);
if($result2->num_rows > 0)
{
    $row = $result2->fetch_assoc();
    $Iniciado = $row['nombre'];
    $_SESSION['nombre'] = $Iniciado;
    $_SESSION['tipoCuenta'] = $row['tipoCuenta'];
    $_SESSION['apellidoPaterno'] = $row['apellidoPaterno'];
    $_SESSION['apellidoMaterno'] = $row['apellidoMaterno'];
    $_SESSION['genero'] = $row['genero'];
    $_SESSION['fechaNacimiento'] = $row['fechaNacimiento'];
    $_SESSION['correo'] = $row['correo'];
    $_SESSION['contrasena'] = $row['contra'];
    header("Location: ../Paginas/home.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include ('../styles.php'); ?>
</head>
<body>
    <div class="container-sm">
        <div class="card mx-auto my-0">
            <div class="card-title p-4">
                <h2 class="fw-bold text-center">Regístrate</h2>
            </div>
            <div class="card-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="formulario-registro mt-4" id="formRegistro" method="POST">
                    <!-- <div class="contendor-subir-imagen d-flex flex-column align-items-center">
                        <div class="contenedor-foto-perfil mb-2">
                            <div class="preview-imagen" id="imgPreview"></div>
                        </div>
                        <label for="btnSubirImagenPerfil" class="btn btn-secondary mb-4">Subir foto de perfil</label>
                        <input type="file" name="btnSubirImagenPerfil" id="btnSubirImagenPerfil" class="d-none" accept=".jpg,.jpeg,.png" onchange="previewImagen(this)">
                    </div> -->
                    <div class="row fila-login">
                        <div class="col-12 col-lg-4 fila-login">
                            <label for="nombre">Nombre(s)</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" oninput="removerError(event)" value="<?php echo($nombre);?>">
                            <div id="nombreFeedback" class="invalid-feedback mb-1">
                                Escriba su nombre, por favor.
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <label for="apellido">Apellido paterno</label>
                            <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control mb-2" oninput="removerError(event)" value="<?php echo($apellidoPaterno);?>">
                            <div id="apellidoPaternoFeedback" class="invalid-feedback mb-1">
                                Escriba su apellido paterno, por favor.
                            </div>
                        </div>
                        <div class="col-6 col-lg-4">
                            <label for="apellido">Apellido materno</label>
                            <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control mb-2" oninput="removerError(event)">
                            <div id="apellidoMaternoFeedback" class="invalid-feedback mb-1">
                                Escriba su apellido materno, por favor.
                            </div>
                        </div>
                    </div>

                    <div class="row fila-login">
                        <div class="col">
                            <label for="genero">Género</label>
                            <select class="form-select mb-2" name="genero" id="genero" aria-label="Default select example" oninput="removerError(event)"> 
                                <option selected value="">Género</option>
                                <option value="hombre">Hombre</option>
                                <option value="mujer">Mujer</option>
                                <option value="otro">Otro...</option>
                            </select>
                            <div id="generoFeedback" class="invalid-feedback mb-1">
                                Seleccione su género, por favor.
                            </div>
                        </div>
                        <div class="col">
                            <label for="fechaNacimiento">Fecha de nacimiento</label>
                            <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control mb-2" oninput="removerError(event)">
                            <div id="fechaNacimientoFeedback" class="invalid-feedback mb-1">
                                Seleccione su fecha de nacimiento, por favor.
                            </div>
                        </div>
                    </div>

                    <div class="row fila-login">
                        <div class="col">
                            <label for="correo">Correo electrónico</label>
                            <input type="email" name="correo" id="correo" class="form-control mb-2" oninput="removerError(event)" value="<?php echo($email);?>">
                            <div id="correoFeedback" class="invalid-feedback mb-1">
                                Escriba un correo, por favor.
                            </div>
                        </div>
                    </div>

                    <div class="row fila-login">
                        <div class="col">
                            <label class="mb-1">Tipo de cuenta</label>
                            <div class="mb-4 d-flex card border-0 shadow-sm">
                                <div class="card-body">
                                    <div class="form-check mb-2">
                                        <input type="radio" class="form-check-input" id="tipoCuentaEstudiante" name="tipoCuenta" value="estudiante" oninput="removerError(event)">
                                        <label for="estudiante" class="form-check-label">Estudiante</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="tipoCuentaMaestro" name="tipoCuenta" value="maestro" oninput="removerError(event)">
                                        <label for="maestro" class="form-check-label">Maestro</label>
                                        <div id="tipoCuentaFeedback" class="invalid-feedback mb-2">
                                            Seleccione un tipo de cuenta, por favor.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="submit" name="btnRegistro" class="btn boton-secundario w-100 mb-4" id="btnRegistro" value="Registrarse">
                </form>
            </div>
        </div>
    </div>
    <!-- <script src="../script.js"></script> -->
</body>
</html>