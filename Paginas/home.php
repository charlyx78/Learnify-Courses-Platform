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

<!-- HERO -->
    <section class="hero">
        <div class="hero-contenido container-sm">
            <div class="hero-slogan">
                <h1 class="mb-3">¡Has vuelto,<?php echo $inciado;?>!</h1> 
                <h6 class="mb-4">Desarrolla tu conocimiento profesional y destaca en la competencia laboral.</h6>
                <button class="btn borde-secundario" id="btnVerCursos">Ver cursos</button>
            </div>
            <div class="d-none d-md-block">
                <img src="../Imagenes/lesson.svg" alt="">
            </div>

        </div>                    
    </section>

    <main class="container-sm contenido" id="contenedorCursos">
<!-- CURSOS -->
        <div class="p-4 mb-4 contenedor-seccion-cursos">
            <div class="mb-4 d-md-flex justify-content-between align-items-end"> 
                <div class="">
                    <h2>Cursos populares</h2>
                    <h6 class="text-secondary">Obtén los cursos más solicitados al mejor precio</h6>
                </div>
                <div class="d-none d-md-block gap-3">
                    <button class="btn boton-terciario" type="button" data-bs-target="#carouselCursosControlsDesktop" data-bs-slide="prev">
                        <i class="bi bi-arrow-left"></i>
                    </button>

                    <button class="btn boton-terciario" type="button" data-bs-target="#carouselCursosControlsDesktop" data-bs-slide="next">
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>            
            </div>

<!-- CARRUSEL MOVIL -->
            <div class="container d-md-none d-block px-0">
                <div id="carouselCursosControls" class="carousel slide mb-2" data-bs-ride="carousel">
                    <div class="carousel-inner carousel-inner-cursos">
                        <div class="carousel-item active">
                            <div class="cursos row">
                                <a href="curso.php" class="col-12">
                                    <div class="curso card border">
                                        <div class="row">
                                            <div class="col-12 contenedor-imagen-curso">
                                                <div class="imagen-curso rounded-top" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                            </div>
                                            <div class="col-12 contenedor-cuerpo-curso">
                                                <div class="card-body pt-3 px-4">
                                                    <h5 class="categoria-curso color-secundario fw-bold mb-1">Desarrollo backend</h5>
                                                    <h4 class="mb-1 titulo-curso"
                                                    title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h4>
                                                    <div class="text-secondary fw-medium">
                                                        <h6 class="mb-1">Juan Villareal</h6>
                                                        <h6 class="mb-2"><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</h6>
                                                    </div>

                                                    <h5 class="m-0 color-secundario fs-2" style="font-size: 1.4em;">$500</h5>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                </a> 
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cursos row">
                                <a href="curso.php" class="col-12">
                                    <div class="curso card border">
                                        <div class="row">
                                            <div class="col-12 contenedor-imagen-curso">
                                                <div class="imagen-curso rounded-top" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                            </div>
                                            <div class="col-12 contenedor-cuerpo-curso">
                                                <div class="card-body pt-3 px-4">
                                                    <h5 class="categoria-curso color-secundario fw-bold mb-1">Desarrollo backend</h5>
                                                    <h4 class="mb-1 titulo-curso"
                                                    title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h4>
                                                    <div class="text-secondary fw-medium">
                                                        <h6 class="mb-1">Juan Villareal</h6>
                                                        <h6 class="mb-2"><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</h6>
                                                    </div>

                                                    <h5 class="m-0 color-secundario fs-2" style="font-size: 1.4em;">$500</h5>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                </a> 
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cursos row">
                                <a href="curso.php" class="col-12">
                                    <div class="curso card border">
                                        <div class="row">
                                            <div class="col-12 contenedor-imagen-curso">
                                                <div class="imagen-curso rounded-top" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                            </div>
                                            <div class="col-12 contenedor-cuerpo-curso">
                                                <div class="card-body pt-3 px-4">
                                                    <h5 class="categoria-curso color-secundario fw-bold mb-1">Desarrollo backend</h5>
                                                    <h4 class="mb-1 titulo-curso"
                                                    title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h4>
                                                    <div class="text-secondary fw-medium">
                                                        <h6 class="mb-1">Juan Villareal</h6>
                                                        <h6 class="mb-2"><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</h6>
                                                    </div>

                                                    <h5 class="m-0 color-secundario fs-2" style="font-size: 1.4em;">$500</h5>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                </a> 
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cursos row">
                                <a href="curso.php" class="col-12">
                                    <div class="curso card border">
                                        <div class="row">
                                            <div class="col-12 contenedor-imagen-curso">
                                                <div class="imagen-curso rounded-top" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                            </div>
                                            <div class="col-12 contenedor-cuerpo-curso">
                                                <div class="card-body pt-3 px-4">
                                                    <h5 class="categoria-curso color-secundario fw-bold mb-1">Desarrollo backend</h5>
                                                    <h4 class="mb-1 titulo-curso"
                                                    title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h4>
                                                    <div class="text-secondary fw-medium">
                                                        <h6 class="mb-1">Juan Villareal</h6>
                                                        <h6 class="mb-2"><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</h6>
                                                    </div>

                                                    <h5 class="m-0 color-secundario fs-2" style="font-size: 1.4em;">$500</h5>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                </a> 
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cursos row">
                                <a href="curso.php" class="col-12">
                                    <div class="curso card border">
                                        <div class="row">
                                            <div class="col-12 contenedor-imagen-curso">
                                                <div class="imagen-curso rounded-top" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                            </div>
                                            <div class="col-12 contenedor-cuerpo-curso">
                                                <div class="card-body pt-3 px-4">
                                                    <h5 class="categoria-curso color-secundario fw-bold mb-1">Desarrollo backend</h5>
                                                    <h4 class="mb-1 titulo-curso"
                                                    title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h4>
                                                    <div class="text-secondary fw-medium">
                                                        <h6 class="mb-1">Juan Villareal</h6>
                                                        <h6 class="mb-2"><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</h6>
                                                    </div>

                                                    <h5 class="m-0 color-secundario fs-2" style="font-size: 1.4em;">$500</h5>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                </a> 
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cursos row">
                                <a href="curso.php" class="col-12">
                                    <div class="curso card border">
                                        <div class="row">
                                            <div class="col-12 contenedor-imagen-curso">
                                                <div class="imagen-curso rounded-top" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                            </div>
                                            <div class="col-12 contenedor-cuerpo-curso">
                                                <div class="card-body pt-3 px-4">
                                                    <h5 class="categoria-curso color-secundario fw-bold mb-1">Desarrollo backend</h5>
                                                    <h4 class="mb-1 titulo-curso"
                                                    title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h4>
                                                    <div class="text-secondary fw-medium">
                                                        <h6 class="mb-1">Juan Villareal</h6>
                                                        <h6 class="mb-2"><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</h6>
                                                    </div>

                                                    <h5 class="m-0 color-secundario fs-2" style="font-size: 1.4em;">$500</h5>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                </a> 
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cursos row">
                                <a href="curso.php" class="col-12">
                                    <div class="curso card border">
                                        <div class="row">
                                            <div class="col-12 contenedor-imagen-curso">
                                                <div class="imagen-curso rounded-top" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                            </div>
                                            <div class="col-12 contenedor-cuerpo-curso">
                                                <div class="card-body pt-3 px-4">
                                                    <h5 class="categoria-curso color-secundario fw-bold mb-1">Desarrollo backend</h5>
                                                    <h4 class="mb-1 titulo-curso"
                                                    title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h4>
                                                    <div class="text-secondary fw-medium">
                                                        <h6 class="mb-1">Juan Villareal</h6>
                                                        <h6 class="mb-2"><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</h6>
                                                    </div>

                                                    <h5 class="m-0 color-secundario fs-2" style="font-size: 1.4em;">$500</h5>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                </a> 
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cursos row">
                                <a href="curso.php" class="col-12">
                                    <div class="curso card border">
                                        <div class="row">
                                            <div class="col-12 contenedor-imagen-curso">
                                                <div class="imagen-curso rounded-top" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                            </div>
                                            <div class="col-12 contenedor-cuerpo-curso">
                                                <div class="card-body pt-3 px-4">
                                                    <h5 class="categoria-curso color-secundario fw-bold mb-1">Desarrollo backend</h5>
                                                    <h4 class="mb-1 titulo-curso"
                                                    title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h4>
                                                    <div class="text-secondary fw-medium">
                                                        <h6 class="mb-1">Juan Villareal</h6>
                                                        <h6 class="mb-2"><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</h6>
                                                    </div>

                                                    <h5 class="m-0 color-secundario fs-2" style="font-size: 1.4em;">$500</h5>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>                                                                                                                                                                                                                                                                                                                                                           
            </div>    

<!-- CARRUSEL ESCRITORIO -->
            <div class="container d-none d-md-block px-0">
                <div id="carouselCursosControlsDesktop" class="carousel slide mb-2" data-bs-ride="carousel">
                    <div class="carousel-inner carousel-inner-cursos">
                        <div class="carousel-item active">
                            <div class="cursos row">
                                <a href="curso.php" class="col-12 col-md-3">
                                    <div class="curso card border">
                                        <div class="row">
                                            <div class="col-4 col-md-12 contenedor-imagen-curso">
                                                <div class="imagen-curso rounded" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                            </div>
                                            <div class="col-8 col-md-12 contenedor-cuerpo-curso">
                                                <div class="card-body pt-2">
                                                    <h5 class="mb-1 titulo-curso"
                                                    title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h5>
                                                    <div class="d-flex justify-content-between align-items-center text-secondary fw-medium">
                                                        <p>Juan Villareal</p>
                                                        <p><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</p>
                                                    </div>

                                                    <h6 class="m-0 color-secundario fs-3" style="font-size: 1.4em;">$500</h6>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                </a> 
                                <a href="curso.php" class="col-12 col-md-3">
                                    <div class="curso card border">
                                        <div class="row">
                                            <div class="col-4 col-md-12 contenedor-imagen-curso">
                                                <div class="imagen-curso rounded" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                            </div>
                                            <div class="col-8 col-md-12 contenedor-cuerpo-curso">
                                                <div class="card-body pt-2">
                                                    <h5 class="mb-1 titulo-curso"
                                                    title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h5>
                                                    <div class="d-flex justify-content-between align-items-center text-secondary fw-medium">
                                                        <p>Juan Villareal</p>
                                                        <p><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</p>
                                                    </div>

                                                    <h6 class="m-0 color-secundario fs-3" style="font-size: 1.4em;">$500</h6>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                </a> 
                                <a href="curso.php" class="col-12 col-md-3">
                                    <div class="curso card border">
                                        <div class="row">
                                            <div class="col-4 col-md-12 contenedor-imagen-curso">
                                                <div class="imagen-curso rounded" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                            </div>
                                            <div class="col-8 col-md-12 contenedor-cuerpo-curso">
                                                <div class="card-body pt-2">
                                                    <h5 class="mb-1 titulo-curso"
                                                    title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h5>
                                                    <div class="d-flex justify-content-between align-items-center text-secondary fw-medium">
                                                        <p>Juan Villareal</p>
                                                        <p><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</p>
                                                    </div>

                                                    <h6 class="m-0 color-secundario fs-3" style="font-size: 1.4em;">$500</h6>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                </a> 
                                <a href="curso.php" class="col-12 col-md-3">
                                    <div class="curso card border">
                                        <div class="row">
                                            <div class="col-4 col-md-12 contenedor-imagen-curso">
                                                <div class="imagen-curso rounded" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                            </div>
                                            <div class="col-8 col-md-12 contenedor-cuerpo-curso">
                                                <div class="card-body pt-2">
                                                    <h5 class="mb-1 titulo-curso"
                                                    title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h5>
                                                    <div class="d-flex justify-content-between align-items-center text-secondary fw-medium">
                                                        <p>Juan Villareal</p>
                                                        <p><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</p>
                                                    </div>

                                                    <h6 class="m-0 color-secundario fs-3" style="font-size: 1.4em;">$500</h6>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                </a> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="cursos row">
                                <a href="curso.php" class="col-12 col-md-3">
                                    <div class="curso card border">
                                        <div class="row">
                                            <div class="col-4 col-md-12 contenedor-imagen-curso">
                                                <div class="imagen-curso rounded" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                            </div>
                                            <div class="col-8 col-md-12 contenedor-cuerpo-curso">
                                                <div class="card-body pt-2">
                                                    <h5 class="mb-1 titulo-curso"
                                                    title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h5>
                                                    <div class="d-flex justify-content-between align-items-center text-secondary fw-medium">
                                                        <p>Juan Villareal</p>
                                                        <p><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</p>
                                                    </div>

                                                    <h6 class="m-0 color-secundario fs-3" style="font-size: 1.4em;">$500</h6>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                </a> 
                                <a href="curso.php" class="col-12 col-md-3">
                                    <div class="curso card border">
                                        <div class="row">
                                            <div class="col-4 col-md-12 contenedor-imagen-curso">
                                                <div class="imagen-curso rounded" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                            </div>
                                            <div class="col-8 col-md-12 contenedor-cuerpo-curso">
                                                <div class="card-body pt-2">
                                                    <h5 class="mb-1 titulo-curso"
                                                    title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h5>
                                                    <div class="d-flex justify-content-between align-items-center text-secondary fw-medium">
                                                        <p>Juan Villareal</p>
                                                        <p><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</p>
                                                    </div>

                                                    <h6 class="m-0 color-secundario fs-3" style="font-size: 1.4em;">$500</h6>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                </a> 
                                <a href="curso.php" class="col-12 col-md-3">
                                    <div class="curso card border">
                                        <div class="row">
                                            <div class="col-4 col-md-12 contenedor-imagen-curso">
                                                <div class="imagen-curso rounded" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                            </div>
                                            <div class="col-8 col-md-12 contenedor-cuerpo-curso">
                                                <div class="card-body pt-2">
                                                    <h5 class="mb-1 titulo-curso"
                                                    title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h5>
                                                    <div class="d-flex justify-content-between align-items-center text-secondary fw-medium">
                                                        <p>Juan Villareal</p>
                                                        <p><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</p>
                                                    </div>

                                                    <h6 class="m-0 color-secundario fs-3" style="font-size: 1.4em;">$500</h6>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                </a> 
                                <a href="curso.php" class="col-12 col-md-3">
                                    <div class="curso card border">
                                        <div class="row">
                                            <div class="col-4 col-md-12 contenedor-imagen-curso">
                                                <div class="imagen-curso rounded" style="background-image: url(https://bs-uploads.toptal.io/blackfish-uploads/components/seo/content/og_image_file/og_image/1154099/0712-Bad_Practices_in_Database_Design_-_Are_You_Making_These_Mistakes_Dan_Social-754bc73011e057dc76e55a44a954e0c3.png);"></div>
                                            </div>
                                            <div class="col-8 col-md-12 contenedor-cuerpo-curso">
                                                <div class="card-body pt-2">
                                                    <h5 class="mb-1 titulo-curso"
                                                    title="Modelo de administracion de datos (SQL Server)">Modelo de administracion de datos (SQL Server)</h5>
                                                    <div class="d-flex justify-content-between align-items-center text-secondary fw-medium">
                                                        <p>Juan Villareal</p>
                                                        <p><i class="bi bi-star-fill me-2 color-star"></i>4.5 (16,298)</p>
                                                    </div>

                                                    <h6 class="m-0 color-secundario fs-3" style="font-size: 1.4em;">$500</h6>
                                                </div>
                                            </div>
                                        </div>                         
                                    </div>
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>                                                                                                                                                                                                                                                                                                                                                               
            </div>    

            <div class="d-md-none d-flex justify-content-around gap-3 ">
                <button class="btn" type="button" data-bs-target="#carouselCursosControls" data-bs-slide="prev">
                    <i class="bi bi-chevron-left"></i>
                </button>

                <button class="btn" type="button" data-bs-target="#carouselCursosControls" data-bs-slide="next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>  
        </div>

    </main>

<?php include ('../footer.php'); ?>

<script src="../script.js"></script>
<script src="../src/js/home.js"></script>

</body>
</html>