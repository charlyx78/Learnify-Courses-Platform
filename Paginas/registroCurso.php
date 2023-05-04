<?php include('../Programa/PregistroCurso.php'); ?>
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

    <?php include('../navbar.php'); ?>

    <main class="container contenido mt-4">

        <div class="informacion-crear-curso">
            <h2 class="mb-4">Información del curso</h2>
            <div class="card mb-5">
                <div class="card-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="txtNombreCurso" class="form-label">Nombre del curso</label>
                                <input type="text" name="txtNombreCurso" class="form-control">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="txtCategoriaCurso" class="form-label">Categoría</label>
                                <select name="txtCategoriaCurso" id="txtCategoriaCurso" class="form-select">
                                    <option selected value="">Elegir</option>
                                    <option value="PHP">PHP</option>
                                    <option value="Javascript">Javascript</option>
                                    <option value="CSS">CSS</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="txtPrecioCurso" class="form-label">Precio</label>
                                <div class="input-group">
                                    <div class="input-group-text">MXN</div>
                                    <input type="text" name="txtPrecioCurso" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <label for="fileImagenCurso" class="form-label">Portada</label>
                                <input type="file" name="fileImagenCurso" class="form-control mb-3" accept=".jpg,.png,.jpeg" onchange="previewImagen(this, document.querySelector('.contenedor-portada-preview'))">
                                <div class="contenedor-portada-preview contenedor-preview">
                                    <div class="portada-preview preview"></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                            <label for="fileImagenCurso" class="form-label">Vídeo promocional</label>
                                <input type="file" name="fileVideoPromoCurso" id="inputVideoPromo" class="form-control mb-3" accept=".mp4,.wmv,.avi">
                                <div class="contenedor-videopromo-preview contenedor-preview">
                                    <video class="videopromo-preview preview" autoplay muted controls loop></video>
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="btnRegistroC" id="btnRegistroC" class="btn boton-secundario w-100" value="Guardar información de curso">
                    </form>
                </div>
            </div>
        </div>


        <div class="row">
            <h2 class="mb-4">Contenido del curso</h2>

            <div class="col-md-3 col-12 mb-4">
                <div class="d-flex flex-column gap-2">
                    <button type="button" class="btn boton-secundario w-100" data-bs-toggle="modal" data-bs-target="#moduloModal">
                        Agregar un módulo
                    </button>
                    <button type="button" class="btn boton-secundario w-100" data-bs-toggle="modal" data-bs-target="#leccionModal">
                        Agregar una lección
                    </button>
                </div>
            </div>

            <div class="col-md-9 col-12">
                <div class="accordion mb-3" id="panelsStayOpen-accordionModulos">
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="panelsStayOpen-heading1">
                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
                                Módulo
                            </button>
                        </h4>
                        <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading1">
                            <div class="accordion-body p-0">
                                <ul class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action leccion">Leccion
                                        <div class="formatos-leccion">
                                            <i class="bi bi-camera-video-fill text-secondary"></i>
                                        </div>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="panelsStayOpen-heading2">
                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="true" aria-controls="panelsStayOpen-collapse2">
                                Módulo
                            </button>
                        </h4>
                        <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading2">
                            <div class="accordion-body p-0">
                                <ul class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action leccion">Leccion 
                                        <div class="formatos-leccion">
                                            <i class="bi bi-file-earmark-text text-secondary"></i>
                                            <i class="bi bi-image-fill text-secondary"></i>
                                        </div>
                                    </a>           
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <button class="btn btn-lg boton-secundario mt-5 w-100">Crear curso</button>

    </main>

    <div class="modal fade" id="moduloModal" tabindex="-1" aria-labelledby="moduloModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="moduloModalLabel">Agregar un módulo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <label for="txtNombreModulo" class="form-label">Módulo</label>
                        <input type="text" name="txtNombreModulo" class="form-control mb-2">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn boton-secundario" name="btnRegistroM" id="btnRegistroM" value="Crear módulo">
                    </form>          
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="leccionModal" tabindex="-1" aria-labelledby="leccionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="leccionModalLabel">Agregar una lección</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                        <label for="txtNombreLeccion" class="form-label">Nombre de la lección</label>
                        <input name="txtNombreLeccion" type="text" class="form-control mb-3" placeholder="Escribe aquí el nombre de la lección">
                        <label for="selectModulo" class="form-label">Módulo</label>
                        <select name="selectModulo" class="form-select mb-3" id="selectModulo">
                            <option selected value="Modulo">Modulo</option>
                            <option value="1">1</option>
                            <option value="2">54</option>
                            <option value="3">3</option>
                        </select>
                        <label for="txtTextoLeccion" class="form-label">Descripción de la lección</label>
                        <textarea name="txtTextoLeccion" class="form-control mb-3" cols="30" rows="10" placeholder="Escribe aquí la descripción de la lección"></textarea>
                        <label for="fileArchivoLeccion" class="form-label">Adujnta un archivo (formatos permitidos: jpg, jpeg, png, wmv, mpg, pdf)</label>
                        <input type="file" name="fileArchivoLeccion" class="form-control mb-3" accept=".jgp,.jpeg,.png,.mp4,.wmv,.pdf">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn boton-secundario" name="btnRegistroL" id="btnRegistroL" value="Crear lección">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php include ('../footer.php'); ?>
    <script src="../src/js/registroCurso.js"></script>
    
</body>
</html>