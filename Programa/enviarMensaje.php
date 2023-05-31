<?php
    include('../Programa/db.php');
    
    $remitente = $_POST["remitente"];
    $destinatario = $_POST["destinatario"];
    $mensaje = $_POST["mensaje"];

    $output="";

    $query = "INSERT INTO mensajes (remitente,destinatario,contenidoMensaje)
            VALUES ('$remitente','$destinatario','$mensaje')";

    if($con->query($query)) {
        $output.="";
    }
    else {
        $output.="Error. Por favor, intentelo de nuevo";
    }
    echo $output;
?>