<?php
$serverDB = "localhost";
$userDB = "root";
$passwordDB = "root";
$databaseDB = "webintermedia";

    $con = mysqli_connect($serverDB, $userDB, $passwordDB, $databaseDB);

    if(!$con)
    {
        die("Conexion Fallida");
    }
?>