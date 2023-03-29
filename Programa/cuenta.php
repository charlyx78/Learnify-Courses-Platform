<?php
include("db.php");

if(isset($_POST["BotonEditar"]))
{
$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$genero = $_POST['genero'];
$fechaNacimiento = $_POST['fechaNacimiento'];
if ($noHacer == 0)
{
    $contra = $_POST['contrasena'];
}
    if ($noHacer == 1){
        echo "<script type='text/javascript'> alert('No usa, $correo')</script>";
        $update = "UPDATE usuarios SET nombre = '$nombre', apellidoPaterno = '$apellidoPaterno', apellidoMaterno = '$apellidoMaterno', genero = '$genero', fechaNacimiento = '$fechaNacimiento' WHERE correo = '$correo'";
        $result= mysqli_query($con, $update);
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellidoPaterno'] = $apellidoPaterno;
        $_SESSION['apellidoMaterno'] = $apellidoMaterno;
        $_SESSION['genero'] = $genero;
        $_SESSION['fechaNacimiento'] = $fechaNacimiento;
    }
    else
    {
        echo "<script type='text/javascript'> alert('Si usa, $correo')</script>";
        $update = "UPDATE usuarios SET nombre = '$nombre', apellidoPaterno = '$apellidoPaterno', apellidoMaterno = '$apellidoMaterno', genero = '$genero', fechaNacimiento = '$fechaNacimiento', contrasena = '$contra' WHERE correo = '$correo'";
        $result= mysqli_query($con, $update);
        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellidoPaterno'] = $apellidoPaterno;
        $_SESSION['apellidoMaterno'] = $apellidoMaterno;
        $_SESSION['genero'] = $genero;
        $_SESSION['fechaNacimiento'] = $fechaNacimiento;
        $_SESSION['contrasena'] = $contra;
    }
}






?>