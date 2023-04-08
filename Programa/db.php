<?php
$serverDB = "127.0.0.1:3307";
$userDB = "root";
$passwordDB = "root";
$databaseDB = "webintermedia";

    $con = mysqli_connect($serverDB, $userDB, $passwordDB, $databaseDB);

    if(!$con)
    {
        die("Conexion Fallida");
    }
?>