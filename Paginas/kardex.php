<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kardex - Learnify</title>
    <?php include ('../styles.php'); ?>
</head>
<body>

    <?php include('../navbar.php'); ?>

    <main class="container-sm contenido">
        <h3 class="fw-bold mb-4">Kardex</h3>
        <section class="busqueda-curso-kardex rounded mb-4">
            <form action="GET" class="form-busqueda-kardex mb-2">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-8">                    
                        <input type="text" class="form-control mb-2" placeholder="Buscar curso...">
                    </div>
                    <div class="col-6 col-md-2 col-lg-2">                   
                         <input type="submit" class="btn boton-primario w-100" value="Buscar">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <button class="btn boton-terciario w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBusquedaAvanzada" aria-expanded="false" aria-controls="collapseBusquedaAvanzada">
                            Búsqueda avanzada
                        </button>
                    </div>
                </div>
            </form>

            <div class="collapse" id="collapseBusquedaAvanzada">
                <form action="GET" class="form-busqueda-avanzada-kardex rounded">
                    <div class="row">
                        <div class="col-6">
                            <label for="fechaInscripcionDesde">Desde</label>
                            <input type="date" name="fechaInscripcionDesde" class="form-control">
                        </div>
                        <div class="col-6">
                            <label for="fechaInscripcionDesde">Hasta</label>
                            <input type="date" name="fechaInscripcionHasta" class="form-control">
                        </div>
                        <div class="col-12 col-lg-3">
                            <select class="form-select" aria-label="Default select example">
                                <option value="" selected>Categoría</option>
                                <option value="tecnologia">Tecnologia</option>
                            </select>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="chb_cursosCompletados">
                                <label class="form-check-label" for="chb_cursosCompletados">
                                    Cursos completados
                                </label>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="chb_cursosIncompletos" checked>
                                <label class="form-check-label" for="chb_cursosIncompletos">
                                    Cursos incompletos
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <input type="submit" class="btn boton-primario boton-busqueda-avanzada-kardex" type="search" aria-label="Search" value="Buscar">                
                        </div>
                    </div>
                </form>
            </div>

        </section>
        <section class="progreso-cursos-kardex mb-4">
            <div class="row">
                <a href="curso.php" class="col-12 col-md-4 col-lg-3 mb-2">
                    <div class="card p-2 border-0">
                        <div class="row">
                            <div class="col-4 col-md-12 contenedor-imagen-curso-kardex">
                                <div class="img-card-top imagen-curso-kardex rounded" style="background-image: url(../Imagenes/base-datos.jpeg);"></div>
                            </div>
                            <div class="card-body py-1 col-8">
                                <div class="card-title"><h6 class="titulo-curso">Modelo de administracion de datos (SQL SERVER)</h6></div>
                            </div>
                        </div>
                        <div class="card-footer pb-0 px-0 border-0 bg-transparent">
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-secundario" style="width: 25%"></div>
                            </div>
                            <div class="progreso-lecciones text-secondary d-flex justify-content-between gap-2">
                                    <p class="m-0">Lecciones</p>
                                    <p class="m-0">4/22</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="curso.php" class="col-12 col-md-4 col-lg-3 mb-2">
                    <div class="card p-2 border-0">
                        <div class="row">
                            <div class="col-4 col-md-12 contenedor-imagen-curso-kardex">
                                <div class="img-card-top imagen-curso-kardex rounded" style="background-image: url(../Imagenes/base-datos.jpeg);"></div>
                            </div>
                            <div class="card-body py-1 col-8">
                                <div class="card-title"><h6 class="titulo-curso">Modelo de administracion de datos (SQL SERVER)</h6></div>
                            </div>
                        </div>
                        <div class="card-footer pb-0 px-0 border-0 bg-transparent">
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-secundario" style="width: 100%"></div>
                            </div>
                            <div class="progreso-lecciones text-secondary d-flex justify-content-between gap-2">
                                    <p class="m-0">Lecciones</p>
                                    <p class="m-0">22/22</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </main>

    <?php include ('../footer.php'); ?>
    <script src="../script.js"></script>
    
</body>
</html>