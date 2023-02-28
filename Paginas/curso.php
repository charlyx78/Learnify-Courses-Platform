<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('../styles.php'); ?>
    <title>Titulo del curso - Learnify</title>
</head>
<body>

    <?php include('../navbar.php'); ?>


<main class="container-sm mt-5">
<!-- TITULO -->
    <div class="header-curso-view row mb-4">
        <div class="col-12">
            <h3 class="mb-2 fw-bolder">Curso de modelo de administracion de datos (SQL Server)</h3>
        </div>
        <div class="col-12 col-md-9">
            <h4 class="precio-curso-view fw-bold mb-2">$500 MXN</h4>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <button class="btn boton-secundario w-100">Comprar</button>
        </div>
<!-- IMAGEN -->
        <div class="col-12 imagen-curso-view mb-3" style="background-image: url(../Imagenes/base-datos.jpeg);">
            <div class="categorias-curso-view w-100 row p-3 d-flex align-items-center justify-content-between">
                <div class="d-flex gap-2  col-12">
                    <h6><span class="badge bg-secundario">Tecnologia</span></h6>
                    <h6><span class="badge bg-secundario">Bases de datos</span></h6>
                    <h6><span class="badge bg-secundario">Programacion</span></h6>
                </div>
                <div class="color-light col-12">
                    <h6><span class="badge bg-primario"><i class="bi bi-star-fill me-2"></i>4.5 (10,523)</span></h6>
                </div>
            </div>
        </div>

        <div class="col-12 d-flex justify-content-end item-detalle-curso-view gap-2">
            <h5 class="d-flex align-items-center gap-2">
                <i class="bi bi-book"></i>
                100 Leciones
            </h5>
            <h5 class="linea-vertical"></h5>
            <h5 class="d-flex align-items-center gap-2">
                <i class="bi bi-clock"></i>
                15 Horas
            </h5>
            <h5 class="linea-vertical"></h5>
            <h5 class="d-flex align-items-center gap-2">
                <i class="bi bi-person-fill"></i>
                10547 Alumnos
            </h5>
        </div>
    </div>

<!-- LECIONES -->
    <section class="lecciones mb-5">
        <h4 class="fw-bold mb-3">Contenido del curso</h4>
        <div class="accordion" id="panelsStayOpen-accordionModulos">
            <div class="accordion-item">
                <h4 class="accordion-header" id="panelsStayOpen-heading1">
                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
                        Módulo
                    </button>
                </h4>
                <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading1">
                    <div class="accordion-body p-0">
                        <ul class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action">Leccion</a>
                            <a href="#" class="list-group-item list-group-item-action">Leccion</a>
                            <a href="#" class="list-group-item list-group-item-action">Leccion</a>
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
                            <a href="#" class="list-group-item list-group-item-action">Leccion</a>
                            <a href="#" class="list-group-item list-group-item-action">Leccion</a>
                            <a href="#" class="list-group-item list-group-item-action">Leccion</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALES -->
    <h4 class="fw-bold mb-3">Calificaciones</h4>
    <div id="carouselTestimonialesCurso" class="carousel slide testimoniales mb-5 bg-terciario py-5 rounded" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active px-3">
                <div class="row gap-2 d-flex justify-content-center">
                    <div class="col-12 col-md-3">
                        <div class="card shadow-lg testimonial rounded-0 border-0">
                            <div class="card-body row">
                                <h5 class="card-title col-12">Nombre del usuario</h5>
                                <h6 class="col-12 calificacion-testimonial mb-3"><i class="bi bi-star-fill me-2"></i>4.5</h6>
                                <p class="card-text texto-testimonial">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit accusamus quas est quae labore, delectus fugit iste cum deleniti dignissimos. Incidunt eius perferendis et blanditiis facilis accusamus quam architecto vitae!</p>
                            </div>
                            <div class="card-footer bg-transparent border-0">
                                <p class="m-0 text-secondary text-end">21/12/2022</p>
                            </div>
                            <div class="imagen-usuario-testimonial">
                                <img src="../Imagenes/escritorio-estudios.jpg" alt="" class="rounded-circle">
                            </div>
                        </div>
                    </div>              
                </div>
            </div>                        
        </div>
        <div class="d-flex justify-content-center mt-4">
            <button class="btn boton-secundario me-2" type="button" data-bs-target="#carouselTestimonialesCurso" data-bs-slide="prev">
                <i class="bi bi-caret-left-fill"></i>
            </button>
            <button class="btn boton-secundario ms-2" type="button" data-bs-target="#carouselTestimonialesCurso" data-bs-slide="next">
                <i class="bi bi-caret-right-fill"></i>
            </button>
        </div>
    </div>

</main>



    <?php include ('../footer.php'); ?>
    <script src="../script.js"></script>

</body>
</html>