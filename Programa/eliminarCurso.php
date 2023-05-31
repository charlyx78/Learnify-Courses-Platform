<?php 
include("db.php");

$idCursoEliminar = $_GET["idCursoEliminar"];

$query9 = "select IDM from modulos where FK_IDC = $idCursoEliminar";
$resultado9 = mysqli_query($con, $query9);

if ($resultado9)
            {
                while($row = $resultado9->fetch_array())
                {
                    $idModuloEliminar = $row['IDM'];
                    $query10 = "select IDL from lecciones where FK_IDM = $idModuloEliminar";
                    $resultado10 = mysqli_query($con, $query10);
                    if ($resultado10)
                    {
                        while($row2 = $resultado10->fetch_array())
                        {
                            $idMLeccionEliminar = $row2['IDL'];
                            $query11 = "delete from lecciones where IDL = $idMLeccionEliminar";
                            $resultado11 = mysqli_query($con, $query11);
                        }
                        $query12 = "delete from modulos where IDM = $idModuloEliminar";
                        $resultado12 = mysqli_query($con, $query12);
                    }
                }
                $query13 = "delete from cursos where IDC = $idCursoEliminar";
                $resultado13 = mysqli_query($con, $query13);
            }

echo "<script type='text/javascript'> alert('Kieres Eliminar el Curso: ".($idCursoEliminar)."')</script>";

header("Location: ../Paginas/gestionCursos.php");


?>