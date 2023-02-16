<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Estilos/styles.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <title>Conozco - Login</title>
</head>
<body>

<!-- BIENVENIDA -->
    <div class="contenedor-pagina d-flex gap-2">
        <div class="contenedor-bienvenida">
            <div class="contenido-bienvenida h-100 overlay d-flex flex-column justify-content-between p-5">
                <div class="logo"> <h1 class="fw-bold">conozco</h1> </div>
                <div class="slogan">
                    <h1 class="fw-bold">BIENVENIDO(A) A TU ESPACIO PARA APRENDER</h1>
                    <h4> Plataforma online para cursos de todo tipo. </h4>
                </div>
            </div>
        </div>

<!-- FORMULARIOS -->
        <div class="contenedor-formulario p-5">
            <div class="contenido-formulario">
                <div id="carruselLoginRegistro" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
<!-- LOGIN -->
                        <div class="carousel-item active">
                            <h2 class="fw-bold mb-4">Inicia sesión</h2>
                            <form action="#" class="formulario-login" id="formLogin" method="POST">
                                <label for="correoLogin">Correo electrónico</label>
                                <input type="text" name="correoLogin" id="correoLogin" class="form-control mb-2" oninput="removerError(event)">
                                <div id="correoFeedback" class="invalid-feedback mb-1">
                                    Escriba un correo, por favor.
                                </div>
                                <label for="contrasenaLogin">Contraseña</label>
                                <input type="password" name="contrasenaLogin" id="contrasenaLogin" class="form-control" oninput="removerError(event)">
                                <div id="contrasenaFeedback" class="invalid-feedback">
                                    Escriba su contraseña, por favor.
                                </div>
                                <input type="submit" name="btnLogin" id="btnLogin" class="btn btn-dark w-100 mt-4 mb-4" id="" value="Iniciar sesión">
                            </form>
                            <div class="contenedor-login-a-registro d-flex justify-content-between mb-4">
                                <p>¿Aún no tienes una cuenta?</p>
                                <a href="#" class="link-dark link-bold" id="btnIrRegistro">Regístrate ahora</a>
                            </div>
                            <p class="text-center">O inicia sesión usando</p>
                        </div>
<!-- REGISTRO -->
                        <div class="carousel-item">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-chevron-left icono-volver me-4" id="btnIrLogin"></i>
                                <h2 class="fw-bold mb-0">Regístrate</h2>
                            </div>
                            <form action="#" class="formulario-registro mt-4" id="formRegistro" method="POST">
                                <!-- <div class="contendor-subir-imagen d-flex flex-column align-items-center">
                                    <div class="contenedor-foto-perfil mb-2">
                                        <div class="preview-imagen" id="imgPreview"></div>
                                    </div>
                                    <label for="btnSubirImagenPerfil" class="btn btn-secondary mb-4">Subir foto de perfil</label>
                                    <input type="file" name="btnSubirImagenPerfil" id="btnSubirImagenPerfil" class="d-none" accept=".jpg,.jpeg,.png" onchange="previewImagen(this)">
                                </div> -->
                                <div class="grid">
                                    <div class="row">
                                        <div class="col">
                                            <label for="nombre">Nombre(s)</label>
                                            <input type="text" name="nombre" id="nombre" class="form-control mb-2" oninput="removerError(event)">
                                            <div id="nombreFeedback" class="invalid-feedback mb-1">
                                                Escriba su nombre, por favor.
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="apellido">Apellido paterno</label>
                                            <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control mb-2" oninput="removerError(event)">
                                            <div id="apellidoPaternoFeedback" class="invalid-feedback mb-1">
                                                Escriba su apellido paterno, por favor.
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="apellido">Apellido materno</label>
                                            <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control mb-2" oninput="removerError(event)">
                                            <div id="apellidoMaternoFeedback" class="invalid-feedback mb-1">
                                                Escriba su apellido materno, por favor.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid">
                                    <div class="row">
                                        <div class="col">
                                            <label for="genero">Género</label>
                                            <select class="form-select mb-2" name="genero" id="genero" aria-label="Default select example"> 
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
                                </div>
                                <label for="correo">Correo electrónico</label>
                                <input type="email" name="correo" id="correo" class="form-control mb-4" oninput="removerError(event)">
                                <div id="correoFeedback" class="invalid-feedback mb-1">
                                    Escriba un correo, por favor.
                                </div>
                                <div class="row mb-2">
                                    <div class="col">
                                        <label for="contrasena">Contraseña</label>
                                        <input type="password" name="contrasena" id="contrasena" class="form-control mb-2" oninput="removerError(event)">
                                        <div id="contrasenaFeedback" class="invalid-feedback mb-1">
                                            Escriba una contraseña, por favor.
                                        </div>
                                        <label for="contrasena">Confirmar contraseña</label>
                                        <input type="password" name="confirmarContrasena" id="confirmarContrasena" class="form-control mb-1" oninput="removerError(event)">
                                        <div id="confirmarFeedback" class="invalid-feedback mb-1">
                                            Escriba la confirmación de su contraseña, por favor.
                                        </div>
                                    </div>
                                    <div class="col">
                                        <ul class="list-group">
                                            <li id="item-validacion-caracteres" class="list-group-item d-flex justify-content-between align-items-center text-left">
                                                Contiene al menos 8 caracteres
                                                <i class="bi bi-x-lg icono-error"></i>
                                            </li>
                                            <li id="item-validacion-mayuscula" class="list-group-item d-flex justify-content-between align-items-center">
                                                Contiene mayúsculas
                                                <i class="bi bi-x-lg icono-error"></i>
                                            </li>
                                            <li id="item-validacion-caracter-especial" class="list-group-item d-flex justify-content-between align-items-center">
                                                Contiene caracteres especiales
                                                <i class="bi bi-x-lg icono-error"></i>
                                            </li>
                                            <li id="item-validacion-numero" class="list-group-item d-flex justify-content-between align-items-center">
                                                Contiene números
                                                <i class="bi bi-x-lg icono-error"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p class="mb-1">Tipo de cuenta</p>
                                <div class="mb-4 d-flex card">
                                    <div class="card-body">
                                        <div class="form-check">
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

                                <input type="submit" name="btnRegistro" class="btn btn-dark w-100 mb-4" id="btnRegistro" value="Registrarse">
                            </form>
                            <p class="text-center">O regístrate usando</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../script.js"></script>

</body>
</html>