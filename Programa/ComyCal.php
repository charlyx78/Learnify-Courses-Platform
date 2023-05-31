<?php
include("db.php");
session_start();

$idCurso = $_GET["idCursoSel"];

echo "<script type='text/javascript'> alert('Curso ".($idCurso)."')</script>";

?>