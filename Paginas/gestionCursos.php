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
                <div class="row">
                    <div class="col-2">
                        <img src="../Imagenes/base-datos.jpeg" class="w-100" alt="">     
                    </div>               
                    <div class="col-8">
                        <h4>Nombre del curso</h4>
                        <div class="">
                            <i class="bi bi-people-fill"></i>
                            15486 estudiantes activos
                        </div>
                        <div class="">
                            <i class="bi bi-star-fill"></i>
                            4.5 (689)
                        </div>
                        <div class="">
                            <i class="bi bi-book-fill"></i>
                            47 lecciones
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex justify-content-end gap-2">
                            <a href="registroCurso.php" class="btn boton-secundario h-100 d-flex align-items-center"><i class="bi bi-pencil-fill"></i></a>
                            <button class="btn btn-danger h-100" style="width:50px;"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <?php include ('../footer.php'); ?>
    
</body>
</html>