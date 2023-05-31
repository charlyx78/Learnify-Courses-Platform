<?php
    include('../Programa/db.php');
    include('../navbar.php'); 
    $remitente = $_POST["remitente"];
    $destinatario = $_POST["destinatario"];

    $output="";

    $query = "select * 
    from mensajes 
    where (remitente = '".$remitente."' AND destinatario = '".$destinatario."')
    OR (remitente = '".$destinatario."' AND destinatario =  '".$remitente."')";
    $chat = mysqli_query($con, $query);
    

    if ($chat)
    { 
        while($row = $chat->fetch_array())
        {
            $contenidoMensaje = $row['contenidoMensaje'];
            if($row["remitente"] == $destinatario) {
                $output.='
                    <div class="contenedor-mensaje w-100 d-flex justify-content-start">
                        <p class="bg-terciario py-3 px-4 mb-1 rounded" style="word-wrap:break; max-width:70%;"> '.$row["contenidoMensaje"].' </p>
                    </div>';
            
            }
            else {
                $output.='
                    <div class="contenedor-mensaje w-100 d-flex justify-content-end">
                        <p class="bg-secundario py-3 px-4 mb-1 rounded" style="word-wrap:break; max-width:70%;"> '.$row["contenidoMensaje"].' </p>
                    </div>';
            }
        }
    }

    echo $output;
?>
