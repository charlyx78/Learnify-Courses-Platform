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

    <main class="container-sm contenido mt-4">
        <h3 class="fw-bold mb-4">Kardex</h3>
        <section class="busqueda-curso-kardex rounded mb-4">
            <form action="" method="GET" class="form-busqueda-kardex mb-2">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-8">                    
                        <input type="text" name="txtNombreCurso" class="form-control mb-2" placeholder="Buscar curso...">
                    </div>
                    <div class="col-6 col-md-2 col-lg-2">                   
                         <input type="submit" name="busqueda" class="btn boton-primario w-100" value="Buscar">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <button class="btn boton-terciario w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBusquedaAvanzada" aria-expanded="false" aria-controls="collapseBusquedaAvanzada">
                            Búsqueda avanzada
                        </button>
                    </div>
                </div>
            </form>

            <div class="collapse" id="collapseBusquedaAvanzada">
                <form method="GET" class="form-busqueda-avanzada-kardex rounded">
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
                            <select class="form-select" name="selectCategoria" aria-label="Default select example">
                                <option value="" selected>Categoría</option>
                                <option value="CSS">CSS</option>
                            </select>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="form-check">
                                <input class="form-check-input" name="cursosCompletados" type="checkbox" value="" id="chb_cursosCompletados">
                                <label class="form-check-label" for="chb_cursosCompletados">
                                    Cursos completados
                                </label>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="form-check">
                                <input class="form-check-input" name="cursosIncompletos" type="checkbox" value="" id="chb_cursosIncompletos" checked>
                                <label class="form-check-label" for="chb_cursosIncompletos">
                                    Cursos incompletos
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <input type="submit" name="busquedaAvanzada" class="btn boton-primario boton-busqueda-avanzada-kardex" type="search" aria-label="Search" value="Buscar">                
                        </div>
                    </div>
                </form>
            </div>

        </section>
        <section class="progreso-cursos-kardex mb-4">
            <div class="row">

            <?php
                include("../Programa/db.php");
                $correo = $_SESSION['correo']; 
                $query = "";

                if(isset($_GET['busqueda']))
                {
                    if(isset($_GET['txtNombreCurso'])) 
                    {
                        $nombreCurso = $_GET['txtNombreCurso'];
                        echo '<h4 class="mb-4"> Resultados para "'.$nombreCurso.'" </h4>';
                        $query = "SELECT * FROM cursos_comprados CC
                                  INNER JOIN cursos C ON C.IDC=CC.FK_IDC
                                  WHERE CC.FK_IDU = '$correo' AND C.nombreC LIKE '%" . $nombreCurso . "%'";
                    }
                }
                else if(isset($_GET['busquedaAvanzada']))
                {
                    $fechaDesde = $_GET['fechaInscripcionDesde'];
                    $fechaHasta = $_GET['fechaInscripcionHasta'];
                    $categoria = $_GET['selectCategoria'];

                    if(isset($_GET['cursosCompletados'])) 
                    {
                        echo '<h4 class="mb-4"> Resultados para búsqueda avanzada </h4>';
                        $query = "SELECT * FROM cursos_comprados CC
                                  INNER JOIN cursos C ON C.IDC = CC.FK_IDC
                                  WHERE CC.fechaCompra BETWEEN '$fechaDesde' AND '$fechaHasta' 
                                  OR C.categoriaC = '$categoria' OR terminado = 1 ";
                    }
                    else if(isset($_GET['cursosIncompletos']))
                    {
                        echo '<h4 class="mb-4"> Resultados para búsqueda avanzada </h4>';
                        $query = "SELECT * FROM cursos_comprados CC
                                  INNER JOIN cursos C ON C.IDC = CC.FK_IDC
                                  WHERE CC.fechaCompra BETWEEN '$fechaDesde' AND '$fechaHasta' 
                                  OR C.categoriaC = '$categoria' OR terminado = 0 ";
                    }
                }
                else {
                    $query = "SELECT * FROM cursos_comprados CC
                    INNER JOIN cursos C ON C.IDC=CC.FK_IDC
                    WHERE FK_IDU = '$correo' ";
                }

                $resultado = mysqli_query($con, $query);
                if ($resultado)
                {
                    while($row = $resultado->fetch_array())
                    {
                        $idCurso = $row['IDC'];
                        $queryProgreso = "SELECT ((COUNT(CASE WHEN LV.Vista = 1 THEN 1 ELSE NULL END) / COUNT(*)) * 100) AS 'Porcentaje',
                                            COUNT(CASE WHEN LV.Vista = 1 THEN 1 ELSE NULL END) AS 'Lecciones vistas',
                                            COUNT(*) AS 'Lecciones totales'
                                            FROM leccionVista LV
                                            LEFT JOIN lecciones L ON LV.FK_Leccion = L.IDL
                                            WHERE LV.FK_Curso = '$idCurso' ";
                        $resultadoProgreso = mysqli_query($con, $queryProgreso);
                        if ($rowProgreso = $resultadoProgreso->fetch_assoc()) {
                            $porcentaje = $rowProgreso['Porcentaje'];
                            $leccionesVistas = $rowProgreso['Lecciones vistas'];
                            $leccionesTotales = $rowProgreso['Lecciones totales'];
                        } else {
                            $porcentaje = 0;
                        }

                        echo'
                            <a href="curso.php?idCursoSel='.$row['IDC'].'" class="col-12 col-md-4 col-lg-3 mb-2">
                                <div class="card p-2 border-0">
                                    <div class="row">
                                        <div class="col-4 col-md-12 contenedor-imagen-curso-kardex">
                                            <div class="img-card-top imagen-curso-kardex rounded" style="background-image: url( '.$row['portadaC'].' );"></div>
                                        </div>
                                        <div class="card-body py-1 col-8">
                                            <div class="card-title"><h6 class="titulo-curso"> '.$row['nombreC'].' </h6></div>
                                        </div>
                                    </div>
                                    <div class="card-footer pb-0 px-0 border-0 bg-transparent">
                                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow=" '.$porcentaje.'" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-secundario" style="width: '.$porcentaje.'%"></div>
                                        </div>
                                        <div class="progreso-lecciones text-secondary d-flex justify-content-between gap-2">
                                                <p class="m-0">Lecciones</p>
                                                <p class="m-0">'.$leccionesVistas.'/'.$leccionesTotales.'</p>
                                        </div>
                                    </div>
                                </div>
                            </a>';
                        }
                    }
                ?>

            </div>
        </section>
    </main>

    <?php include ('../footer.php'); ?>
    <script src="../script.js"></script>
    
</body>
</html>