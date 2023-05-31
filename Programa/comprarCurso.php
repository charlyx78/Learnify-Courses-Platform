<?php 
include("db.php");
session_start();

$idCurso = $_GET["idCursoComprar"];

$query = "select FK_IDU from cursos_comprados where FK_IDC = '$idCurso'";
$result= mysqli_query($con, $query);
if($result->num_rows > 0)
{
    while($row = $result->fetch_array())
    {
        $correoUsuario = $row['FK_IDU'];
        if($correoUsuario = $_SESSION['correo'])
        {
            
        }
        else
        {
            $correoUsuarioPasado = $_SESSION['correo'];
            $query2 = "insert into cursos_comprados (FK_IDC, FK_IDU)
            values ('$idCurso','$correoUsuarioPasado')";
            $result2= mysqli_query($con, $query2);
            echo "<script type='text/javascript'> alert('Curso comprado Pa')</script>";
        }
    }
    header("Location: ../Paginas/curso.php?idCursoSel=$idCurso");
}
else
{
            $correoUsuarioPasado = $_SESSION['correo'];
            $query2 = "insert into cursos_comprados (FK_IDC, FK_IDU)
            values ('$idCurso','$correoUsuarioPasado')";
            $result2= mysqli_query($con, $query2);
            echo "<script type='text/javascript'> alert('Curso comprado Pa')</script>";
            header("Location: ../Paginas/curso.php?idCursoSel=$idCurso");
}
?>