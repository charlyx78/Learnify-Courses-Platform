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
    <section class="hero bg-primario px-5 px-md-4 py-4 py-md-2 mb-5 rounded">
        <div class="hero-contenido container-sm">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <h2>Has vuelto, <?php echo $inciado;?>!</h2>
                    <h4 class="mb-3">¿Qué quieres aprender hoy?</h4> 
                    <form method="GET">
                        <div class="row">
                            <div class="col-12 col-lg-7 mb-3 d-flex">
                                <input type="text" name="txtBusquedaCurso" class="form-control position-relative ps-5">
                                <button type="submit" name="busqueda" class="btn boton-terciario position-absolute rounded-start" id="btnVerCursos"><i class="bi bi-search"></i></button>
                            </div>
                            <div class="col-12 col-lg-4">
                                <button type="button" class="btn boton-terciario w-100" id="btnBusqAvan">Búsqueda avanzada</button>
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
        <form method="GET">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <label for="nombreCurso">Nombre del curso</label>
                    <input type="text" name="nombreCurso" class="form-control">
                </div>
                <div class="col-6 col-lg-3">
                <label for="categoriaCurso">Categoría</label>
                    <select name="categoriaCurso" class="form-control">
                        <option value="">Selecciona una categoría</option>
                    </select>
                </div>
                <div class="col-12 col-lg-2">
                    <label for="nombreProfesor">Nombre del profesor</label>
                    <input type="text" name="nombreProfesor" class="form-control">
                </div>
                <div class="col-6 col-lg-2">
                    <label for="inicioRangoFechaCurso">Desde</label>
                    <input type="date" name="inicioRangoFechaCurso" class="form-control">
                </div>
                <div class="col-6 col-lg-2 mb-3">
                    <label for="finRangoFechaCurso">Hasta</label>
                    <input type="date" name="finRangoFechaCurso" class="form-control">
                </div>
                <div class="col-lg-12">
                    <button type="submit" name="busquedaAvanzada" class="btn boton-terciario w-100">Buscar</button>
                </div>
            </div>
        </form>
    </section>

<!-- CURSOS -->
    <section class="contenedor-cursos-populares mt-4">
        <h4 class="mb-3">Cursos populares</h4>
        <div class="row">
            <?php 
            include("../Programa/db.php");

            if(isset($_GET['busqueda']))
            {
                $nombre = $_GET['txtBusquedaCurso'];
                $query = "SELECT * FROM cursos WHERE nombreC LIKE '%" . $nombre . "' ";
            }
            else if(isset($_GET['busquedaAvanzada']))
            {
                $nombre = $_GET['nombreCurso'];
                $categoria = $_GET['categoriaCurso'];
                $profesor = $_GET['nombreProfesor'];
                $rangoInicio = $_GET['inicioRangoFechaCurso'];
                $rangoFinal = $_GET['finRangoFechaCurso'];

                $query = "SELECT * FROM cursos C
                INNER JOIN usuarios U ON C.profesorC = U.id
                WHERE 1 = 1"; 
            
                if (!empty($nombre)) {
                    $query .= " AND C.nombreC LIKE '%" . $nombre . "%'";
                }
                
                if (!empty($categoria)) {
                    $query .= " AND C.categoriaC = '$categoria'";
                }
                
                if (!empty($profesor)) {
                    $query .= " AND CONCAT(U.nombre, ' ', U.apellidoPaterno, ' ', U.apellidoMaterno) LIKE '%" . $profesor . "%'";
                }
                
                if (!empty($rangoInicio) && !empty($rangoFinal)) {
                    $query .= " AND C.fechaRegistroC BETWEEN '$rangoInicio' AND '$rangoFinal'";
                }
            }
            else {
                $query = "SELECT * FROM `cursos` ORDER BY califC ASC;";
            }

            $resultado = mysqli_query($con, $query);
            if ($resultado)
            {
                while($row = $resultado->fetch_array())
                {
                    $CursoID = $row['IDC'];
                    $CursoNombre = $row['nombreC'];
                    $CursoCategoria = $row['categoriaC'];
                    $CursoPrecio = $row['precioC'];
                    $CursoPortada = $row['portadaC'];
                    $CursoVideo = $row['videoC'];
                    $CursoCalificacion = round($row['califC'],1);

                    $CursoProfe = $row['profesorC'];
                    $query2 = "select nombre, apellidoPaterno, apellidoMaterno from usuarios where id = $CursoProfe";
                    $resultado2 = mysqli_query($con, $query2);
                    $row2 = $resultado2->fetch_assoc();
                    $nombreCompletoProfeCurso = $row2['nombre']." ".$row2['apellidoPaterno']." ".$row2['apellidoMaterno'];
             ?>
                <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <a href="curso.php?idCursoSel=<?php echo $CursoID ?>" class="col-12 col-md-3">
                        <div class="curso card border-0">
                            <div class="row">
                                <div class="col-4 col-md-12 pb-1 contenedor-imagen-curso">
                                    <div class="imagen-curso rounded-top" style="background-image: url('<?php echo $row['portadaC'] ?>');"></div>
                                </div>
                                <div class="col-8 col-md-12 contenedor-cuerpo-curso">
                                    <div class="card-body pt-2">
                                        <div class="categorias-curso">
                                            <span class="badge borde-secundario mb-2"><?php echo $CursoCategoria ?></span>
                                        </div>
                                        <h5 class="mb-1 titulo-curso"
                                        title="Modelo de administracion de datos (SQL Server)"><?php echo $CursoNombre ?></h5>
                                        <div class="d-flex justify-content-between align-items-center text-secondary fw-medium">
                                            <p class="m-0"><?php echo $nombreCompletoProfeCurso ?></p>
                                            <p class="m-0"><i class="bi bi-star-fill me-2 color-star"></i><?php echo $CursoCalificacion?></p>
                                        </div>

                                        <h6 class="m-0 fs-3" style="font-size: 1.4em;">$<?php echo $CursoPrecio ?></h6>
                                    </div>
                                </div>
                            </div>                         
                        </div>
                    </a> 
                </div>
            <?php } } ?>
        </div>                                                                                                                                                                                                                                                                                                                                          
    </section>      
    <section class="contenedor-cursos-vendidos mt-4">
        <h4 class="mb-3">Cursos más vendidos</h4>
        <div class="row">
            <?php
            $query33 = "SELECT COUNT(FK_IDC) AS contador, FK_IDC from cursos_comprados GROUP BY FK_IDC ORDER BY contador DESC";
            $resultado33 = mysqli_query($con, $query33);
            if ($resultado33)
            {
                while($row33 = $resultado33->fetch_array())
                {
                    $idCursoMasVendido = $row33['FK_IDC'];
                    $query3 = "select * from cursos where IDC = $idCursoMasVendido";
             $resultado3 = mysqli_query($con, $query3);
             if ($resultado3)
             {
                 while($row = $resultado3->fetch_array())
                 {
                     $CursoID = $row['IDC'];
                     $CursoNombre = $row['nombreC'];
                     $CursoCategoria = $row['categoriaC'];
                     $CursoPrecio = $row['precioC'];
                     $CursoPortada = $row['portadaC'];
                     $CursoVideo = $row['videoC'];
                     $CursoCalificacion = round($row['califC'],1);
 
                     $CursoProfe = $row['profesorC'];
                     $query2 = "select nombre, apellidoPaterno, apellidoMaterno from usuarios where id = $CursoProfe";
                     $resultado2 = mysqli_query($con, $query2);
                     $row2 = $resultado2->fetch_assoc();
                     $nombreCompletoProfeCurso = $row2['nombre']." ".$row2['apellidoPaterno']." ".$row2['apellidoMaterno']; ?>  <div class="col-12 col-md-4 col-lg-3 mb-4">
                    <a href="curso.php?idCursoSel=<?php echo $CursoID ?>" class="col-12 col-md-3">
                        <div class="curso card border-0">
                            <div class="row">
                                <div class="col-4 col-md-12 pb-1 contenedor-imagen-curso">
                                    <div class="imagen-curso rounded-top" style="background-image: url('<?php echo $row['portadaC'] ?>');"></div>
                                </div>
                                <div class="col-8 col-md-12 contenedor-cuerpo-curso">
                                    <div class="card-body pt-2">
                                        <div class="categorias-curso">
                                            <span class="badge borde-secundario mb-2"><?php echo $CursoCategoria ?></span>
                                        </div>
                                        <h5 class="mb-1 titulo-curso"
                                        title="Modelo de administracion de datos (SQL Server)"><?php echo $CursoNombre ?></h5>
                                        <div class="d-flex justify-content-between align-items-center text-secondary fw-medium">
                                            <p class="m-0"><?php echo $nombreCompletoProfeCurso ?></p>
                                            <p class="m-0"><i class="bi bi-star-fill me-2 color-star"></i><?php echo $CursoCalificacion?></p>
                                        </div>

                                        <h6 class="m-0 fs-3" style="font-size: 1.4em;">$<?php echo $CursoPrecio ?></h6>
                                    </div>
                                </div>
                            </div>                         
                        </div>
                    </a> 
                </div>
            <?php }}}} ?>
        </div>                                                                                                                                                                                                                                                                                                                                          
    </section>      
    <section class="contenedor-cursos-recientes mt-4">
        <h4 class="mb-3">Cursos más recientes</h4>
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