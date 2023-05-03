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

    <main class="container contenido mt-4">

    <div id="carouselVentas" class="carousel slide" data-bs-ride="carousel" pause>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <h2 class="mb-4">Tus cursos</h2>

                <div class="card border-0 mb-4 bg-light">
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-6">                            
                                    <label for="dateDesde" class="form-label">Desde</label>
                                    <input type="date" name="dateDesde" class="form-control mb-3"></div>
                                <div class="col-6">
                                    <label for="dateHasta" class="form-label">Hasta</label>
                                    <input type="date" name="dateHasta" class="form-control mb-3">
                                </div>
                                <div class="col-6">
                                    <label for="selectCategoria" class="form-label">Categoría</label>
                                    <select name="" id="" class="form-select mb-3">
                                        <option value="">Todos los cursos</option>
                                    </select>
                                </div>
                                <div class="col-6 d-flex align-items-end">
                                    <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="">
                                    <label class="form-check-label" for="exampleCheck1">Solo cursos activos</label>
                                    </div>
                                </div>
                                <div class="col-12"><button type="submit" class="btn boton-terciario w-100">Buscar</button></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-responsive" style="height: 600px;">
                    <table class="table table-light table-bordered">
                        <thead>
                            <th>Curso</th>
                            <th>Alumnos inscritos</th>
                            <th>Nivel promedio</th>
                            <th>Ingresos totales</th>
                            <th></th>
                        </thead>
                        <tr>
                            <td>Curso de modelo de administracion de datos (SQL Server)</td>
                            <td>15489</td>
                            <td>56%</td>
                            <td>$4646000</td>
                            <td><button type="button" class="btn borde-secundario" data-bs-target="#carouselVentas" data-bs-slide-to="1">Ver alumnos inscritos</button></td>
                        </tr>
                    </table>
                </div>
                <div class="d-flex justify-content-end">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="carousel-item">
                <h2 class="mb-4">Alumnos inscritos</h2>
                <div class="table-responsive" style="height: 600px;">
                    <table class="table table-light table-bordered">
                        <thead>
                            <th>Nombre</th>
                            <th>Fecha de inscripción</th>
                            <th>Nivel de avance</th>
                            <th>Precio pagado</th>
                            <th>Método de pago</th>
                        </thead>
                        <tr class="table-success">
                            <td>Samuel Castro Botello</td>
                            <td>14/02/2023</td>
                            <td>100%</td>
                            <td>$350</td>
                            <td>Paypal</td>
                        </tr>
                    </table>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="">
                        <button class="btn boton-terciario" data-bs-target="#carouselVentas" data-bs-slide-to="0">Volver a cursos</button>
                    </div>
                    <div class="">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
    </main>

    <?php include ('../footer.php'); ?>
    <script src="../script.js"></script>
    
</body>
</html>