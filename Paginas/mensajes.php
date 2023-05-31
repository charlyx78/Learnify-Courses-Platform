<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnify - Mensajes</title>
    <?php include ('../styles.php'); ?>
</head>
<body>

    <?php include('../navbar.php'); 
            include("../Programa/db.php"); ?>

    <main class="container-sm contenido">
        <h3 class="mb-4">Mensajes</h3>
        <div class="usuarios-mensajes">
        <?php 
                $query = "select * from usuarios";
                $resultado = mysqli_query($con, $query);
                    if ($resultado)
                    { 
                        while($row = $resultado->fetch_array())
                        {
                            $UsuarioID = $row['id'];
                            $UsuarioNombre = $row['nombre'] ." ". $row['apellidoPaterno'];
            ?>
            <ul class="list-group">
                <a class="list-group-item mb-2 py-3" href="mensajesChat.php?toUser=<?php echo $UsuarioID?>">
                    <div class="row align-items-center">
                        <div class="col-2 col-lg-1 avatar-mensaje">
                            <img src="../Imagenes/avatar.svg" class="rounded-circle" width="45" height="45" alt="Avatar">
                        </div>
                        <div class="col-10 col-lg-11"> 
                            <div class="d-flex align-items-center">
                                <h6 class="m-0"> <?php echo $UsuarioNombre?> </h6>
                            </div>
                        </div>
                    </div>
                </a>
            </ul>
        <?php }}  ?>
        </div>
    </main>



    <?php include ('../footer.php'); ?>
    <script src="../script.js"></script>
    
</body>
</html>