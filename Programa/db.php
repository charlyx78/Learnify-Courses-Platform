<?php
$serverDB = "127.0.0.1:3308";
$userDB = "root";
$passwordDB = "";
$databaseDB = "learnify";

    $con = mysqli_connect($serverDB, $userDB, $passwordDB, $databaseDB);

    if(!$con)
    {
        die("Conexion Fallida");
    }
?>