<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('../styles.php'); ?>
    <title>Learnify - Inicio</title>
</head>
<body>

<?php include('../navbar.php'); ?>


    <main class="container-sm contenido" id="contenedorCursos">

    <!-- HERO -->
    <section class="hero bg-primario px-5 px-md-4 py-4 py-md-2 mb-4 rounded">
        <div class="hero-contenido container-sm">
            <div class="row align-items-center">
                <div class="col-12 col-md-8">
                    <h2>Has vuelto, <?php echo $inciado;?>!</h2>
                    <h4 class="mb-3">¿Qué quieres aprender hoy?</h4> 
                    <form action="">
                        <div class="row">
                            <div class="col-7 d-flex">
                                <input type="text" name="txtBusquedaCurso" class="form-control position-relative">
                                <button type="submit" class="btn boton-terciario position-absolute rounded-start" id="btnVerCursos"><i class="bi bi-search"></i></button>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn boton-terciario" id="btnBusqAvan">Búsqueda avanzada</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-4 d-flex justify-content-end p-5">
                    <div class="d-none d-md-block">
                        <img src="../Imagenes/lesson.svg" width="350" alt="">
                    </div>
                </div>
            </div>
        </div>                    
    </section>

<!-- BUSCADOR -->
    <section class="buscador-cursos bg-light rounded-bottom border mb-5 px-4 py-4" style="display:none;">
        <form action="">
            <div class="row">
                <div class="col-3">
                    <label for="nombreCurso">Nombre del curso</label>
                    <input type="text" name="nombreCurso" class="form-control">
                </div>
                <div class="col-3">
                <label for="categoriaCurso">Categoría</label>
                    <select name="categoriaCurso" class="form-control">
                        <option value="">Selecciona una categoría</option>
                    </select>
                </div>
                <div class="col-2">
                    <label for="nombreCurso">Nombre del profesor</label>
                    <input type="text" name="nombreCurso" class="form-control">
                </div>
                <div class="col-2">
                    <label for="inicioRangoFechaCurso">Desde</label>
                    <input type="date" name="inicioRangoFechaCurso" class="form-control">
                </div>
                <div class="col-2 mb-2">
                    <label for="finRangoFechaCurso">Hasta</label>
                    <input type="date" name="finRangoFechaCurso" class="form-control">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn boton-terciario w-100">Buscar</button>
                </div>
            </div>
        </form>
    </section>

<!-- CURSOS -->
    <section class="contenedor-cursos-populares mt-5">
        <h4 class="mb-4">Cursos populares</h4>
        <div class="row">
            <?php for($i=0; $i<=3; $i++) { ?>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <a href="curso.php" class="col-12 col-md-3">
                        <div class="curso card border-0">
                            <div class="row">
                                <div class="col-4 col-md-12 pb-1 contenedor-imagen-curso">
                                    <div class="imagen-curso rounded-top" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                </div>
                                <div class="col-8 col-md-12 contenedor-cuerpo-curso">
                                    <div class="card-body pt-2">
                                        <div class="categorias-curso">
                                            <span class="badge borde-secundario mb-2">Bases de datos</span>
                                            <span class="badge borde-secundario mb-2">SQL Server</span>
                                        </div>
                                        <h5 class="mb-1 titulo-curso"
                                        title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h5>
                                        <div class="d-flex justify-content-between align-items-center text-secondary fw-medium">
                                            <p class="m-0">Juan Villareal</p>
                                            <p class="m-0"><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</p>
                                        </div>

                                        <h6 class="m-0 fs-3" style="font-size: 1.4em;">$500</h6>
                                    </div>
                                </div>
                            </div>                         
                        </div>
                    </a> 
                </div>
            <?php } ?>
        </div>                                                                                                                                                                                                                                                                                                                                          
    </section>      
    <section class="contenedor-cursos-vendidos mt-5">
        <h4 class="mb-4">Cursos más vendidos</h4>
        <div class="row">
            <?php for($i=0; $i<=3; $i++) { ?>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <a href="curso.php" class="col-12 col-md-3">
                        <div class="curso card border-0">
                            <div class="row">
                                <div class="col-4 col-md-12 pb-1 contenedor-imagen-curso">
                                    <div class="imagen-curso rounded-top" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                </div>
                                <div class="col-8 col-md-12 contenedor-cuerpo-curso">
                                    <div class="card-body pt-2">
                                        <div class="categorias-curso">
                                            <span class="badge borde-secundario mb-2">Bases de datos</span>
                                            <span class="badge borde-secundario mb-2">SQL Server</span>
                                        </div>
                                        <h5 class="mb-1 titulo-curso"
                                        title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h5>
                                        <div class="d-flex justify-content-between align-items-center text-secondary fw-medium">
                                            <p class="m-0">Juan Villareal</p>
                                            <p class="m-0"><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</p>
                                        </div>

                                        <h6 class="m-0 fs-3" style="font-size: 1.4em;">$500</h6>
                                    </div>
                                </div>
                            </div>                         
                        </div>
                    </a> 
                </div>
            <?php } ?>
        </div>                                                                                                                                                                                                                                                                                                                                          
    </section>      
    <section class="contenedor-cursos-recientes mt-5">
        <h4 class="mb-4">Cursos más recientes</h4>
        <div class="row">
            <?php for($i=0; $i<=3; $i++) { ?>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <a href="curso.php" class="col-12 col-md-3">
                        <div class="curso card border-0">
                            <div class="row">
                                <div class="col-4 col-md-12 pb-1 contenedor-imagen-curso">
                                    <div class="imagen-curso rounded-top" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                </div>
                                <div class="col-8 col-md-12 contenedor-cuerpo-curso">
                                    <div class="card-body pt-2">
                                        <div class="categorias-curso">
                                            <span class="badge borde-secundario mb-2">Bases de datos</span>
                                            <span class="badge borde-secundario mb-2">SQL Server</span>
                                        </div>
                                        <h5 class="mb-1 titulo-curso"
                                        title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h5>
                                        <div class="d-flex justify-content-between align-items-center text-secondary fw-medium">
                                            <p class="m-0">Juan Villareal</p>
                                            <p class="m-0"><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</p>
                                        </div>

                                        <h6 class="m-0 fs-3" style="font-size: 1.4em;">$500</h6>
                                    </div>
                                </div>
                            </div>                         
                        </div>
                    </a> 
                </div>
            <?php } ?>
        </div>                                                                                                                                                                                                                                                                                                                                          
    </section>      

    </main>

<?php include ('../footer.php'); ?>

<script src="../script.js"></script>
<script src="../src/js/home.js"></script>

</body>
</html>