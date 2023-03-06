<?php
session_start();
if(!isset($_SESSION['nombre']))
{
    header("Location: ../Paginas/login.php");
}
$inciado = $_SESSION['nombre'];

?>