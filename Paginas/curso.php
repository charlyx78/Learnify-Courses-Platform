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

    <div class="contenedor-curso-info">
        <div class="container">
        <div class="contenido-curso row position-absolute w-75 bg-primario">
            <div class="col-8">
                <div class="contenido-curso-info mb-5">
                    <h3 class="mb-3 fw-bold">Curso de modelo de administración de datos (SQL Server)</h3>
                    <div class="instructor-curso mb-5 d-flex align-items-center">
                        <img src="../Imagenes/avatar.svg" class="rounded-circle me-4" width="40" height="40" alt="">
                        <h5 class="m-0">Juan Alejandro Villarreal Mojica</h5>
                    </div>
                    <h5 class="mb-3" style="text-align: justify;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci provident iure harum ad quod sit neque? Temporibus doloribus ad pariatur, quibusdam perferendis explicabo! Facilis dolores alias voluptatibus est doloremque laborum.</h5>
                    <div class="info-curso">
                        <div class="col-12 hstack item-detalle-curso-view gap-2">      
                            <h6 class="d-flex align-items-center gap-2">
                                <i class="bi bi-star-fill me-2 color-star"></i>
                                4.5 (10,523)
                            </h6>
                            <div class="vr"></div>
                            <h6 class="d-flex align-items-center gap-2">
                                <i class="bi bi-book"></i>
                                100 Leciones
                            </h6>
                            <div class="vr"></div>
                            <h6 class="d-flex align-items-center gap-2">
                                <i class="bi bi-clock"></i>
                                15 Horas
                            </h6>
                            <div class="vr"></div>
                            <h6 class="d-flex align-items-center gap-2">
                                <i class="bi bi-person-fill"></i>
                                10547 Alumnos
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
        <div class="row position-relative d-flex justify-content-end" style="top: 0; left: 0;">
            <div class="col-3">
                <div class="contenido-comprar-curso">
                    <div class="card">
                        <div class="card-body">
                            <img src="../Imagenes/base-datos.jpeg" width="100%" class="mb-2" alt="">
                            <h4 class="text-dark text-end">$500 MXN</h4>
                            <button type="button" class="btn boton-secundario w-100 mb-3">Comprar ahora</button>
                            <div class="incluye-curso">
                                <h5 class="text-dark">Este curso incluye</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <i class="bi bi-camera-video-fill text-secondary me-2"></i>
                                        5 videos
                                    </li>
                                    <li class="list-group-item">
                                        <i class="bi bi-image-fill text-secondary me-2"></i>
                                        14 imagenes
                                    </li>
                                    <li class="list-group-item">
                                        <i class="bi bi-file-earmark-text text-secondary me-2"></i>
                                        5 archivos de texto
                                    </li>
                                    <li class="list-group-item">
                                        <i class="bi bi-filetype-pdf text-secondary me-2"></i>
                                        1 PDF
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
            <div class="col-12">
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
                                            <a href="#" class="list-group-item list-group-item-action leccion">Leccion
                                                <div class="formatos-leccion">
                                                    <i class="bi bi-camera-video-fill text-secondary"></i>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action leccion">Leccion
                                                <div class="formatos-leccion">
                                                    <i class="bi bi-file-earmark-text text-secondary"></i>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action leccion">Leccion
                                                <div class="formatos-leccion">
                                                    <i class="bi bi-filetype-pdf text-secondary"></i>
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
                                        <a href="#" class="list-group-item list-group-item-action leccion">Leccion 
                                            <div class="formatos-leccion">
                                                <i class="bi bi-file-earmark-text text-secondary"></i>
                                                <i class="bi bi-image-fill text-secondary"></i>
                                            </div>
                                        </a>
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
                    </section>
                </div>

    </div>


<!-- LECIONES -->
    

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