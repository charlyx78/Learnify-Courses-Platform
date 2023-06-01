<?php
session_start();
if(!isset($_SESSION['nombre']))
{
    header("Location: ../Paginas/login.php");
}
$inciado = $_SESSION['nombre'];
$apellidoPaterno = $_SESSION['apellidoPaterno'];
$apellidoMaterno = $_SESSION['apellidoMaterno'];
$nombreCompleto = $inciado . ' ' . $apellidoPaterno . ' ' . $apellidoMaterno; 
$correo = $_SESSION['correo'];
$noHacer = 0;
if ($_SESSION['contrasena'] == "")
{
    $noHacer = 1;
}

?>