<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnify - Perfil</title>
    <?php include ('../styles.php'); ?>
</head>
<body>

    <?php include('../navbar.php'); ?>

    <div class="container contenido mt-4">
        <h2 class="mb-4">Mis cursos</h2>
        <a href="registroCurso.php" class="btn boton-secundario w-100 mb-4"><i class="bi bi-plus-circle-fill me-3"></i>Crear nuevo curso</a>
        <ul class="list-group">
            <li class="list-group-item" aria-current="true">
            <?php 
            include("../Programa/db.php");
            $iniciadoID = $_SESSION['id'];
            $query = "select * from cursos where profesorC = '$iniciadoID'";
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

                    $query2 = "select nombre, apellidoPaterno, apellidoMaterno from usuarios where id = $iniciadoID";
                    $resultado2 = mysqli_query($con, $query2);
                    $row2 = $resultado2->fetch_assoc();
                    $nombreCompletoProfeCurso = $row2['nombre']." ".$row2['apellidoPaterno']." ".$row2['apellidoMaterno'];
            ?>
                <div class="row">
                    <div class="col-2">
                        <img src="<?php echo $row['portadaC'] ?>" class="w-100" alt="">     
                    </div>               
                    <div class="col-8">
                        <h4><?php echo $CursoNombre ?></h4>
                        <div class="">
                            <i class="bi bi-people-fill"></i>
                            ID : <?php echo $CursoID ?> estudiantes activos
                        </div>
                        <div class="">
                            <i class="bi bi-star-fill"></i>
                            Categoria: <?php echo $CursoCategoria ?> (689)
                        </div>
                        <div class="">
                            <i class="bi bi-book-fill"></i>
                            Precio: $<?php echo $CursoPrecio ?> - 47 lecciones
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex justify-content-end gap-2">
                            <a href="registroCurso.php?idCursoSel=<?php echo $CursoID ?>" class="btn boton-secundario h-100 d-flex align-items-center"><i class="bi bi-pencil-fill"></i></a>
                            <button class="btn btn-danger h-100" style="width:50px;"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                    </div>
                </div>
                <?php } } ?>
            </li>
        </ul>
    </div>

    <?php include ('../footer.php'); ?>
    
</body>
</html>