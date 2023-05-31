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
        if($correoUsuario == $_SESSION['correo'])
        {
            echo "<script type='text/javascript'> alert('Ya lo tenias comprado pa')</script>";
        }
        else
        {
            $correoUsuarioPasado = $_SESSION['correo'];
            $query2 = "insert into cursos_comprados (FK_IDC, FK_IDU)
            values ('$idCurso','$correoUsuarioPasado')";
            $result2= mysqli_query($con, $query2);
            echo "<script type='text/javascript'> alert('Curso comprado Pa')</script>";

            //insertar en LeccionVista
            $query3 = "select IDM from modulos where FK_IDC = $idCurso";
            $result3 = mysqli_query($con, $query3);
            if($result3)
            {
                while($row3 = $result3->fetch_array())
                {
                    $idModulo = $row3['IDM'];
                    $query4 = "select IDL from lecciones where FK_IDM = $idModulo";
                    $result4= mysqli_query($con, $query4);
                    if($result4)
                    while($row4 = $result4->fetch_array())
                    {
                        $idLeccionVista = $row4['IDL'];
                        $query2 = "insert into leccionvista (FK_Curso, FK_Leccion, FK_User,Vista)
                        values ('$idCurso', '$idLeccionVista', '$correoUsuarioPasado','0')";
                        $result2= mysqli_query($con, $query2);
                    }
                }
            }

            header("Location: ../Paginas/curso.php?idCursoSel=$idCurso");
        }
    }
}
else
{
            $correoUsuarioPasado = $_SESSION['correo'];
            $query2 = "insert into cursos_comprados (FK_IDC, FK_IDU)
            values ('$idCurso','$correoUsuarioPasado')";
            $result2= mysqli_query($con, $query2);
            echo "<script type='text/javascript'> alert('Curso comprado Pa')</script>";

            //insertar en LeccionVista
            $query3 = "select IDM from modulos where FK_IDC = $idCurso";
            $result3 = mysqli_query($con, $query3);
            if($result3)
            {
                while($row3 = $result3->fetch_array())
                {
                    $idModulo = $row3['IDM'];
                    $query4 = "select IDL from lecciones where FK_IDM = $idModulo";
                    $result4= mysqli_query($con, $query4);
                    if($result4)
                    while($row4 = $result4->fetch_array())
                    {
                        $idLeccionVista = $row4['IDL'];
                        $query2 = "insert into leccionvista (FK_Curso, FK_Leccion, FK_User,Vista)
                        values ('$idCurso', '$idLeccionVista', '$correoUsuarioPasado','0')";
                        $result2= mysqli_query($con, $query2);
                    }
                }
            }

            header("Location: ../Paginas/curso.php?idCursoSel=$idCurso");
}
?>