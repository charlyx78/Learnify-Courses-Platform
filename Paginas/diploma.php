<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diploma - Learnify</title>
    <?php include ('../styles.php'); ?>
</head>
<body>

<!-- <style>
    @media print {
        .contenedor-diploma {
            background-color: #081826;
        }
    }
</style> -->

<?php 
        include('../navbar.php');
        include('../Programa/db.php');
        $cursoSelecionado = $_GET["idCursoSel"];
        $correoSesion = $_SESSION["correo"];
?>

<main class="container contenido mt-4">

<div class="contenedor-diploma bg-primario p-5" id="contenidoDiploma" style="width: 1280px; height: 720px;">
    <div class="logo d-flex justify-content-center align-items-center mb-5">
        <img src="../Imagenes/logo.png" alt="Logo" width="120" height="96" class="d-inline-block align-text-top me-2">    
        <h2 class="m-0 fw-bold">learnify</h2>
    </div>

    <div class="d-flex align-items-center flex-column text-center">
        <h5 class="m-0">CERTIFICA A</h5>
        <h3 class="fw-bold"> <?php echo $nombreCompleto ?> </h3>
        <h5 class="mb-4">POR PARTICIPAR Y COMPLETAR</h5>

        <?php
            $query = "select * from cursos_comprados cc inner join cursos c on cc.FK_IDC=c.IDC 
                        where C.IDC = $cursoSelecionado and CC.FK_IDU='$correoSesion'";
            $resultado = mysqli_query($con, $query);
            if ($resultado)
            {
                while($row = $resultado->fetch_array())
                {                    
                    echo '<h2 class="fw-bold color-secundario mt-4 mb-5">'.$row['nombreC'].'</h2>';
                    echo '<h5 class="mt-5">Certificado de aprobación online 
                        </br>
                        Aprobado el '.$row['fechaFinalizacion'].'</h5>';
                }
            }
        ?>
    </div>

</div>

<button type="button" class="btn boton-secundario mt-2" id="printDiploma">Imprimir diploma</button>


</main>

<?php include ('../footer.php'); ?>

<script src="../src/js/diploma.js"></script>    

</body>
</html>