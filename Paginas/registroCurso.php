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
                    <form action="">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="txtNombreCurso" class="form-label">Nombre del curso</label>
                                <input type="text" name="txtNombreCurso" class="form-control">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="txtCategoriaCurso" class="form-label">Categoría</label>
                                <select name="txtCategoriaCurso" class="form-select">
                                    <option value="">PHP</option>
                                    <option value="">Javascript</option>
                                    <option value="">CSS</option>
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="txtPrecioCurso" class="form-label">Precio</label>
                                <div class="input-group">
                                    <div class="input-group-text">MXN</div>
                                    <input type="text" name="txtPrecioCurso" class="form-control">
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="fileImagenCurso" class="form-label">Portada</label>
                                <input type="file" name="fileImagenCurso" class="form-control mb-3" accept=".jpg,.png,.jpeg" onchange="previewImagen(this, document.querySelector('.contenedor-portada-preview'))">
                                <div class="contenedor-portada-preview contenedor-preview">
                                    <div class="portada-preview preview"></div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                            <label for="fileImagenCurso" class="form-label">Vídeo promocional</label>
                                <input type="file" name="fileVideoPromoCurso" id="inputVideoPromo" class="form-control mb-3" accept=".mp4,.wmv,.avi">
                                <div class="contenedor-videopromo-preview contenedor-preview">
                                    <video class="videopromo-preview preview" autoplay muted controls loop></video>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-6">
                <h2>Crear módulo</h2>
                <div class="crear-modulos-curso card mb-5">
                    <div class="card-body">
                        <form action="">
                            <label for="txtNombreModulo" class="form-label">Módulo</label>
                            <input type="txtNombreModulo" class="form-control mb-2">
                            <button type="submit" class="btn boton-secundario">Crear módulo</button>
                        </form>
                    </div>
                </div>

                <h2>Crear lección</h2>
                <div class="crear-leccion-curso card">
                    <div class="card-body">
                        <form action="">
                            <label for="txtNombreLeccion" class="form-label">Nombre de la lección</label>
                            <input name="txtNombreLeccion" type="text" class="form-control mb-3" placeholder="Escribe aquí el nombre de la lección">
                            <label for="txtTextoLeccion" class="form-label">Descripción de la lección</label>
                            <textarea name="txtTextoLeccion" class="form-control mb-3" cols="30" rows="10" placeholder="Escribe aquí la descripción de la lección"></textarea>
                            <label for="fileArchivoLeccion" class="form-label">Adujnta un archivo (formatos permitidos: jpg, jpeg, png, wmv, mpg, pdf)</label>
                            <input type="file" name="fileArchivoLeccion" class="form-control mb-3" accept=".jgp,.jpeg,.png,.mp4,.wmv,.pdf">
                            <button type="submit" class="btn boton-secundario">Crear lección</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <h2>Modulos del curso</h2>

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
        
        <button class="btn btn-lg boton-secundario-glow boton-float">Crear curso</button>

    </main>

    <?php include ('../footer.php'); ?>
    <script src="../src/js/registroCurso.js"></script>
    
</body>
</html>