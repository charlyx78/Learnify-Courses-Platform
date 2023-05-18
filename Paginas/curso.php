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
    <script src="https://www.paypal.com/sdk/js?client-id=Ac8wuw0EY67Aws6Qp16ir-ZYJqrbHPIgNY47p6Nf2liE8ae3RaC8Sp-Ttgs9lUgN-Yk0qsXS25EwomSx&currency=MXN"></script>

    <?php include('../navbar.php');         
    $cursoSelecionado = $_GET["idCursoSel"] ;
    include("../Programa/db.php");
    $query = "select * from cursos where IDC = $cursoSelecionado";
    $resultado = mysqli_query($con, $query);
    if ($resultado)
    { 
    $row = $resultado->fetch_array();
    $CursoID = $row['IDC'];
    $CursoNombre = $row['nombreC'];
    $CursoCategoria = $row['categoriaC'];
    $CursoPrecio = $row['precioC'];
    $CursoPortada = $row['portadaC'];
    $CursoVideo = $row['videoC'];
        
    $CursoProfe = $row['profesorC'];
    $query2 = "select nombre, apellidoPaterno, apellidoMaterno from usuarios where id = $CursoProfe";
    $resultado2 = mysqli_query($con, $query2);
    $row2 = $resultado2->fetch_assoc();
    $nombreCompletoProfeCurso = $row2['nombre']." ".$row2['apellidoPaterno']." ".$row2['apellidoMaterno'];
    }
    ?>

    <div class="contenedor-curso-info">

        <div class="fondo-portada-curso">
            <div class="bg-image vw-100 py-5" 
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo $CursoPortada ?>'); height:60vh;">
                <div class="container text-light">
                    <div class="row">
                        <div class=" col-12 col-lg-9 pe-lg-5">
                            <h2 class="mb-3 fw-bold"><?php echo $CursoNombre ?></h2>
                            <div class="instructor-curso mb-5 d-flex align-items-center">
                                <img src="../Imagenes/avatar.svg" class="rounded-circle me-4" width="40" height="40" alt="">
                                <h5 class="m-0"><?php echo $nombreCompletoProfeCurso ?></h5>
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
                            <div id="paypal-button-container-sm" class="d-lg-none py-5"></div>
                        </div>
                    </div>           
                </div>
            </div>
        </div>
        

        <div class="position-relative d-none d-lg-block">
            <div class="container py-5">
                <div class="row">
                    <div class="col-9"></div>
                    <div class="col-3">
                        <div class="contenido-comprar-curso">
                            <div class="card">
                                <div class="card-body">
                                    <video src="<?php echo $CursoVideo ?>" width="100%" class="mb-2" autoplay muted controls></video>
                                    <h4 class="text-dark text-end">$ <?php echo $CursoPrecio ?> MXN</h4>
                                    <div id="paypal-button-container-lg"></div>
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
        </div>
        

        <div class="container">
            <section class="lecciones mb-5">
                <h4 class="fw-bold mb-3">Contenido del curso</h4>
            <?php 
            $query3 = "select * from modulos where FK_IDC = $cursoSelecionado";
            $resultado3 = mysqli_query($con, $query3);
            if ($resultado3)
            {
                while($row = $resultado3->fetch_array())
                {
                    $ModuloID = $row['IDM'];
                    $ModuloNombre = $row['nombreM'];
            ?>
                <div class="accordion" id="panelsStayOpen-accordionModulos">
                    <div class="accordion-item">
                        <h4 class="accordion-header" id="panelsStayOpen-heading1">
                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
                            <?php echo $ModuloNombre ?>
                            </button>
                        </h4>
                        <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-heading1">
                            <div class="accordion-body p-0">
                                <ul class="list-group list-group-flush">
                                <?php 
                                $query4 = "select * from lecciones where FK_IDM = $ModuloID";
                                $resultado4 = mysqli_query($con, $query4);
                                if ($resultado4)
                                {
                                    while($row = $resultado4->fetch_array())
                                                    {
                                        $LeccionID = $row['IDL'];
                                        $LeccionNombre = $row['nombreL'];
                                ?>
                                    <a href="#" class="list-group-item list-group-item-action leccion">
                                    <?php echo $LeccionNombre ?>
                                        <div class="formatos-leccion">
                                            <i class="bi bi-camera-video-fill text-secondary"></i>
                                        </div>
                                    </a>
                                <?php } } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } } ?>
            </section>

            <h4 class="fw-bold mb-3">Calificaciones</h4>
            <div id="carouselTestimonialesCurso" class="carousel slide testimoniales mb-5 py-5 rounded" data-bs-ride="carousel">
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
        </div>
            

    </div>
</main>

    <?php include ('../footer.php'); ?>
    <script src="../script.js"></script>

    <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: 100
                        }
                    }]
                });
            },
            onApprove: function(data,actions) {
                actions.order.capture().then(function(detalles){
                    //codigo al concretar la coompra
                });
            },
            onCancel: function(data) {
                alert('Pago cancelado');
                console.log(data);
            }
        }).render('#paypal-button-container-sm');

        paypal.Buttons().render('#paypal-button-container-lg')
    </script>

</body>
</html>