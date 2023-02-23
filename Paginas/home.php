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
    <section class="hero mb-5">
        <div class="hero-contenido container-sm">
            <img src="../Imagenes/hero.svg" alt="">
            <div class="hero-slogan">
                <h1 class="mb-2">Lleva tu carrera al máximo potencial</h1> 
                <h6 class="m-0">De mano los mejores profesionales con cursos online</h6>
            </div>            
        </div>                    
    </section>

    <main class="container-sm">
<!-- SEARCHBAR -->
        <section class="busqueda-curso mb-4">
            <form class="form-busqueda gap-2">
                <input type="text" class="form-control input-busqueda mb-1" placeholder="Busca un curso...">
                <div class="dropdown">
                <button class="btn borde-terciario dropdown-toggle categoria-busqueda mb-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Categoría
                </button>
                <ul class="dropdown-menu overflow-y-scroll" style="max-height: 200px;">
                    <li><a class="dropdown-item" href="#">Nombre de categoria</a></li>
                </ul>
                </div>
                <input type="submit" class="btn boton-terciario boton-busqueda" type="search" aria-label="Search" value="Buscar">                
            </form>

        </section>
<!-- NAVEGACION CURSOS -->
        <nav class="navegacion-home mb-5">
            <ul class="d-flex justify-content-around w-100 p-0">
                <li class="item-navegacion-home item-active"> <a class="link-navegacion-home" data-bs-target="#carouselCursos" data-bs-slide-to="0" href="#">Más populares</a> </li>
                <li class="item-navegacion-home"> <a class="link-navegacion-home" data-bs-target="#carouselCursos" data-bs-slide-to="1" href="#">Mejor calificados</a> </li>
                <li class="item-navegacion-home"> <a class="link-navegacion-home" data-bs-target="#carouselCursos" data-bs-slide-to="2" href="#">Más recientes</a> </li>
            </ul>
        </nav>

<!-- CURSOS -->
        <div id="carouselCursos" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cursos row">
                    <a href="curso.php" class="col-12 col-md-4 col-lg-3 mb-3">
                        <div class="curso card border-0">
                            <div class="row">
                                <div class="col-4 col-md-12 contenedor-imagen-curso">
                                    <div class="img-card-top imagen-curso rounded-top" style="background-image: url(../Imagenes/base-datos.jpeg);"></div>
                                </div>
                                <div class="col-8 col-md-12 contenedor-cuerpo-curso">
                                    <div class="card-body">
                                        <h5 class="mb-1 titulo-curso"
                                        title="Curso de modelo de administracion de datos (SQL Server)">Curso de modelo de administracion de datos (SQL Server)</h5>
                                        <p class="text-secondary mb-1">Juan Alejandro Villareal Mojica</p>
                                        <h6 class="m-0 fw-normal">$ MXN 500</h6>
                                    </div>
                                    <div class="card-footer d-flex border-0 bg-transparent justify-content-between">
                                        <p class="text-secondary d-flex gap-2 mb-1"> <i class="bi bi-clock fw-bold"></i> 15 horas</p> 
                                        <p class="text-secondary d-flex gap-2 mb-1"> <i class="bi bi-people-fill"></i></i> 20,547</p>
                                    </div>
                                </div>
                            </div>                
                            <div class="calificacion-curso position-absolute p-2">
                                <span class="badge rounded-pill bg-light-nb"><i class="bi bi-star-fill me-2 color-calificacion"></i></i>4.5 (10,523)</span>
                            </div>            
                        </div>
                    </a>                                                                                                     
                </div>

                </div>
                <div class="carousel-item">
                    <h1>MEJOR CALIFICADOS</h1>
                </div>
                <div class="carousel-item">
                    <h1>MAS RECIENTES</h1>
                </div>
            </div>
    </div>
    </main>

<?php include ('../footer.php'); ?>

    <script src="../script.js"></script>

</body>
</html>