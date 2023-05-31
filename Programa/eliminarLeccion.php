<?php 
include("db.php");

$idLeccionEliminar = $_GET["idLeccionEliminar"];
$query8 = "select FK_IDM from lecciones where IDL = $idLeccionEliminar";
$resultado8 = mysqli_query($con, $query8);
if ($resultado8)
{
    $row = $resultado8->fetch_assoc();
    $idDelModulo = $row['FK_IDM'];

    $query8 = "select FK_IDC from modulos where IDM = $idDelModulo";
    $resultado8 = mysqli_query($con, $query8);
    if ($resultado8)
        {
        $row = $resultado8->fetch_assoc();
        $idDelCurso = $row['FK_IDC'];

        $queryBorrar = "delete from lecciones where IDL = $idLeccionEliminar";
        $resultadoBorrar = mysqli_query($con, $queryBorrar);
        }
}

echo "<script type='text/javascript'> alert('Kieres Eliminar la Leccion: ".($idLeccionEliminar)." del Modulo: ".($idDelModulo)." del Curso: ".($idDelCurso)."')</script>";

header("Location: ../Paginas/registroCurso.php?idCursoSel=$idDelCurso");

?>