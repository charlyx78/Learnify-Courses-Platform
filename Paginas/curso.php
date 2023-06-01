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
    <!-- Replace "test" with your own sandbox Business account app client ID -->
    <script src="https://www.paypal.com/sdk/js?client-id=AfPOK7hP6lz-PxqwfLDqnmdppQeLU7Fh1U_ivNEX0AQuE-DZP4fLGRhTCSUbD4-JkvDqg6oZtq-gOz7W&currency=MXN"></script>

    <?php include('../navbar.php');     
    $cursoSelecionado = $_GET["idCursoSel"];
    include("../Programa/db.php");
    include('../Programa/ComyCal.php'); 
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

                                            <?php
                                            $contadorVistas = 0;
                                            $vistaVistas = 0;
                                            $query4 = "select Vista from leccionvista where FK_Curso = $cursoSelecionado AND FK_User = '$correo'";
                                            $result4= mysqli_query($con, $query4);
                                            if($result4->num_rows > 0)
                                            {
                                                while($row4 = $result4->fetch_array())
                                                {
                                                    $contadorVistas = $contadorVistas + 1;
                                                }
                                            }
                                            
                                            $query5 = "select SUM(Vista) as sum from leccionvista where FK_Curso = $cursoSelecionado AND FK_User = '$correo'";
                                            $result5= mysqli_query($con, $query5);
                                            if($result5->num_rows > 0)
                                            {
                                                $row5 = $result5->fetch_array();
                                                $vistaVistas = $row5['sum'];
                                            }

                                            if ($vistaVistas >= $contadorVistas && $vistaVistas != 0)
                                            {
                                            ?>
                                                <button type="button" class="btn boton-secundario mt-3" data-bs-toggle="modal" data-bs-target="#comentarioModal" style="z-index: 40;">Calificar curso</button>
                                                <a href="diploma.php?idCursoSel=<?php echo $CursoID ?>" class="btn boton-secundario">Descargar diploma</a>
                                            <?php
                                                $fechaActual = date('Y-m-d');
                                                $query6 = "UPDATE cursos_comprados SET fechaFinalizacion = '$fechaActual', terminado = 1 WHERE FK_IDC = '$cursoSelecionado' AND fechaFinalizacion IS NULL ";
                                                $result6 = mysqli_query($con, $query6);
                                            }
                                            ?>
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
                                    <a href="leccion.php?idLeccionSel=<?php echo $LeccionID ?>" class="list-group-item list-group-item-action leccion">
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
                <?php 
                $query21 = "select * from comcal where FK_IDC = $cursoSelecionado";
                $resultado21 = mysqli_query($con, $query21);
                if ($resultado21)
                {
                    $i=0;
                    while($row21 = $resultado21->fetch_array())
                    {
                        $usuario = $row21['FK_IDU'];
                        $comentario = $row21['Comentario'];
                        $calif = $row21['Calificación'];
                ?>
                    <div class="carousel-item <?php if($i==0) echo 'active'; ?> px-3">
                        <div class="row gap-2 d-flex justify-content-center">
                            <div class="col-12 col-md-3">
                                <div class="card shadow-sm testimonial rounded-0 border-0">
                                    <div class="card-body row">
                                        <h5 class="card-title col-12"><?php echo $usuario ?></h5>
                                        <h6 class="col-12 calificacion-testimonial mb-3"><i class="bi bi-star-fill me-2"></i><?php echo $calif ?></h6>
                                        <p class="card-text texto-testimonial"><?php echo $comentario ?></p>
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
                <?php $i++;}}?>
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

<div class="modal fade" id="comentarioModal" tabindex="-1" aria-labelledby="comentarioModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="comentarioModalLabel">Califica este curso</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <label for="txtComentario" class="form-label">Comentario</label>
                        <textarea name="txtComentario" class="form-control" id="" cols="30" rows="10"></textarea>
                        <label for="selectCalificacion" class="form-label">Calificación</label>
                        <select name="selectCalificacion" id="" class="form-select">
                            <option selected value="1">1</option>
                            <option selected value="2">2</option>
                            <option selected value="3">3</option>
                            <option selected value="4">4</option>
                            <option selected value="5">5</option>
                        </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <?php $_SESSION['ultimoCursoVisitado'] = $cursoSelecionado; ?>
                    <input type="submit" class="btn boton-secundario" name="btnRegistroM" id="btnRegistroM" value="Calificar">
                    </form>  
                </div>
            </div>
        </div>
    </div>

    <?php include ('../footer.php'); ?>
    <script src="../script.js"></script>

    <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: <?php echo $CursoPrecio ?>
                        }
                    }]
                });
            },
            onApprove: function(data,actions) {
                actions.order.capture().then(function(orderData){
                    alert('Pago Realizado')
                    console.log("Pago?")
                });
            },
            onCancel: function(data) {
                alert('Pago cancelado')
                console.log(data)
            }
        }).render('#paypal-button-container-sm');

        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: <?php echo $CursoPrecio ?>
                        }
                    }]
                });
            },
            onApprove: function(data,actions) {
                actions.order.capture().then(function(orderData){
                    window.location.href="../Programa/comprarCurso.php?idCursoComprar=<?php echo $CursoID ?>"
                });
            },
            onCancel: function(data) {
                alert('Pago cancelado')
                console.log(data)
            }
        }).render('#paypal-button-container-lg')
    </script>

</body>
</html>