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

<?php include('../Programa/registroCategoria.php'); ?>
    <main class="container contenido mt-4">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="d-flex gap-2 mb-4 bg-light p-4 rounded">
            <label for="txtNombreCat" class="form-label">Nombre de la categoria</label>
            <input type="text" name="txtNombreCat" id="nombreCat" class="form-control me-4">
            <input type="submit" name="guardarCat" id="enviar" value="Guardar" class="btn boton-secundario">
        </form>

        <table class="table table-light table-bordered">
            <thead>
                <th>Categoria</th>
                <th></th>
                <th></th>
            </thead>
            <?php
                include('../Programa/db.php');
                
                $query = "select * from categorias";
                $resultado = mysqli_query($con, $query);

                if ($resultado)
                {
                    while($row = $resultado->fetch_array())
                    {
                        ?>
                        <tr>
                            <td> <?php echo $row['nombreCat'];?> </td>
                            <td> <button type="button" class="btn w-100 boton-secundario boton-editar-categoria" data-idEditar="<?php echo $row['idCat'];?>"> <i class="bi bi-pencil-fill"></i> </button> </td>
                            <td> <button type="button" class="btn w-100 boton-eliminar-categoria btn-danger" data-valor="<?php echo $row['idCat'];?>"> <i class="bi bi-trash-fill"></i> </button> </td>
                        </tr>
                        <?php
                    }
                }
            ?>

        </table>
    </main>



    <?php include ('../footer.php'); ?>
    <script src="../src/js/registroCat.js"></script>
    
</body>
</html>