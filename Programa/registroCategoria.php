<?php
include("db.php");

    if(isset($_POST["valor"]))
    {
        $idCat = $_POST['valor'];
        $query = "DELETE FROM categorias WHERE idCat = $idCat";
        $result = mysqli_query($con, $query);
    }
    if(isset($_POST["guardarCat"]))
    {
        $nombreCat = $_POST['txtNombreCat'];
        $query = "select * from categorias where nombreCat = '$nombreCat'";
        $result = mysqli_query($con, $query);
        if(!$result->num_rows > 0) 
        {
                $query2 = "INSERT INTO categorias (nombreCat) 
                            VALUES ('$nombreCat');";
                $result = mysqli_query($con, $query2);
                echo "<script type='text/javascript'> alert('Se ha agregado la categoría '".($nombreCat)."' exitosamente')</script>";
        }
    }

?>