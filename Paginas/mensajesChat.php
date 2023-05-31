<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learnify - Mensajes</title>
    <?php include ('../styles.php'); ?>
</head>
<body>

    <?php include('../navbar.php'); 
            include('../Programa/db.php'); ?>

    <main class="container-sm contenido contenido-mensaje">
        <div class="card">
            <div class="card-title shadow-sm d-flex justify-content-start align-items-center gap-3 p-3">
                <a href="mensajes.php"><i class="bi bi-chevron-left icono-volver"></i></a>
                
                <?php 
                if(isset($_GET["toUser"]))
                {
                   
                    $query = "select * from usuarios where id= '".$_GET["toUser"]."' ";
                    $UsuarioNombre = mysqli_query($con, $query);
                    if ($UsuarioNombre)
                    { 
                        while($row = $UsuarioNombre->fetch_array())
                        {
                            $UsuarioID = $row['id'];
                            $UNombre = $row['nombre'] ." ". $row['apellidoPaterno'];
                    
                ?>
                <img src="../Imagenes/avatar.svg" class="rounded-circle" height="45" width="45" alt="">
                <h3> <?php echo $UNombre?> </h3>
                <input type="text" value= <?php echo $_GET["toUser"] ?> id="destinatario" hidden>
                <input type="text" value= <?php echo $_SESSION["id"] ?> id="remitente" hidden>
                <?php 
                        }
                    }
                }
                else 
                {
                    $query = "select * from usuarios";
                    $UsuarioNombre = mysqli_query($con, $query);
                    if ($UsuarioNombre)
                    { 
                        while($row = $UsuarioNombre->fetch_array())
                        {
                            $_SESSION["toUser"] = $UsuarioNombre["id"];
                ?>
                <h3> <?php echo $UNombre?> </h3>
                <input type="text" value= <?php echo $_GET["toUser"] ?> id="destinatario" hidden>
                <input type="text" value= <?php echo $_SESSION["id"] ?> id="remitente" hidden>
                <?php                 
                        }
                    }      
                }
                ?>

            </div>
            <div class="card-body contenedor-chat" style="height: 650px; overflow-y: scroll;" >
                <div id="msjBody">
                <?php
                    if(isset($_GET["toUser"]))
                    {
                        $query = "select * 
                        from mensajes 
                        where (remitente = '".$_SESSION["id"]."' AND destinatario = '".$_GET["toUser"]."')
                        OR (remitente = '".$_GET["toUser"]."' AND destinatario =  '".$_SESSION["id"]."')";
                        $chats = mysqli_query($con, $query);
                    }
                    else 
                    {
                        $query = "select * 
                        from mensajes 
                        where (remitente = '".$_SESSION["id"]."' AND destinatario = '".$_GET["toUser"]."')
                        OR (remitente = '".$_GET["toUser"]."' AND destinatario =  '".$_SESSION["id"]."')";
                        $chats = mysqli_query($con, $query);
                        if ($chats)
                        { 
                            while($row = $chats->fetch_array())
                            {
                                if($row["remitente"] == $_SESSION["id"]) {
                                    echo'
                                    <div class="contenedor-mensaje w-100 d-flex justify-content-start">
                                        <p class="bg-terciario py-3 px-4 mb-1 rounded" style="word-wrap:break; max-width:70%;"> '.$row["contenidoMensaje"].' </p>                                 
                                    </div>';

                                }
                                else {
                                    echo'
                                    <div class="contenedor-mensaje w-100 d-flex justify-content-end">
                                        <p class="bg-secundario py-3 px-4 mb-1 rounded" style="word-wrap:break; max-width:70%;"> '.$row["contenidoMensaje"].' </p>                          
                                    </div>';

                                }
                            }
                        }
                    }
                ?>
                </div>
            </div>


            <div class="card-footer">
                <form action="" class="mensaje">
                    <div class="d-flex align-items-start gap-2">
                        <textarea id= "mensaje" name="mensaje" class="form-control w-100 h-auto" placeholder="Escribe un mensaje..."></textarea>
                        <button type="button" id="enviarMensaje" class="btn boton-secundario"><i class="bi bi-send-fill"></i></button>
                    </div>
                </form>
            </div>
        </div>

        <div id="mensaje2"></div>
    </main>

    
    <?php include ('../footer.php'); ?>
    <!-- <script src="../script.js"></script> -->
    
    <script src="../src/js/mensajes.js"></script>
    
</body>
</html>