<?php
    session_start();
    include("db.php");

    if(isset($_POST["btnLogin"]))
    {
        $errorLogin = false;
        $errorMensajeLogin = "";
        $correo = $_POST['correoLogin'];
        $contra = $_POST['contrasenaLogin'];

        $query= "select * from usuarios where correo = '$correo' and contrasena = '$contra'";
        $result= mysqli_query($con, $query);

        if($result)
        {
            if($result->num_rows > 0)
            {
            $row = $result->fetch_assoc();
            $Iniciado = $row['nombre'];

            $_SESSION['nombre'] = $Iniciado;
            $_SESSION['tipoCuenta'] = $row['tipoCuenta'];
            header("Location: ../Paginas/home.php");
            //echo "<script type='text/javascript'> alert('Sesion Iniciada Correctamente')</script>";
            }
            else
            {
                $errorLogin = true;
                $errorMensajeLogin = "Correo o contraseña incorrectos, por favor intentélo de nuevo";
                echo "<script> var errorMensajeLogin = '".($errorMensajeLogin)."';</script>";
                echo "<script> var errorLogin = ".($errorLogin).";</script>";
            }
        }
        else
        {
            $errorLogin = true;
            $errorMensajeLogin = "No existe ninguna cuenta registrada en la aplicacion";
            echo "<script> var errorMensajeLogin = '".($errorMensajeLogin)."';</script>";
            echo "<script> var errorLogin = ".($errorLogin).";</script>";
        }
    }

    if(isset($_POST["btnRegistro"]))
    {
        echo "<script type='text/javascript'> alert('ei')</script>";
        $errorRegistro = false;
        $errorMensajeRegistro = "";
        $nombre = $_POST['nombre'];
        $apellidoPaterno = $_POST['apellidoPaterno'];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $genero = $_POST['genero'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $correo = $_POST['correo'];
        $contra = $_POST['contrasena'];
        $confirmarContra = $_POST['confirmarContrasena'];
        $tipoCuenta = $_POST['tipoCuenta'];

            $query = "select * from usuarios where correo = '$correo'";
            $result2= mysqli_query($con, $query);
            if(!$result2->num_rows > 0)
            {
                echo $nombre, $apellidoPaterno, $apellidoMaterno, $genero, $fechaNacimiento, $correo, $contra, $confirmarContra, $tipoCuenta;
                $query2 = "insert into usuarios (nombre, apellidoPaterno, apellidoMaterno, genero, fechaNacimiento, correo, contrasena, tipoCuenta)
                values ('$nombre','$apellidoPaterno','$apellidoMaterno','$genero','$fechaNacimiento','$correo', '$contra','$tipoCuenta')";
                $result2= mysqli_query($con, $query2);
                $_SESSION['nombre'] = $nombre;
                echo $_SESSION['nombre'];
            }
            else
            {
                $errorRegistro = true;
                $errorMensajeRegistro = "Ya existe una cuenta con este correo electrónico";
                echo "<script> var errorMensajeRegistro = '".($errorMensajeRegistro)."';</script>";
                echo "<script> var errorRegistro = ".($errorRegistro).";</script>";
            }
    }

    // Se instala composer y se manda a llamar autoload
    require_once '../vendor/autoload.php';
    // Se declaran las credenciales de la API de Google
    $clientID = '539426120680-lvogna6eo124iulgdv6sfg83nujce42n.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'http://localhost/learnify/Paginas/registroAPI.php';


    //http://localhost:8080/learnify/Paginas/registroapi.php

    // Se crea una instancia del cliente de Google
    $client = new Google\Client();
    // Se setean las credenciales declaradas previamente al cliente
    $client->setClientId($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirectUri);
    // Se solicitan los permisos para obtener la informacion de la cuenta de Google
    $client->addScope("email");
    $client->addScope("profile");

    // Entra en este if si se está intentando iniciar con Google
    if(isset($_GET['code'])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $client->setAccessToken($token['access_token']);

        $google_oauth = new Google\Service\Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();
        // Se obtiene la informacion de la cuenta de Google
        $email = $google_account_info->email;
        $nombre = $google_account_info->givenName;
        $apellidoPaterno = $google_account_info->familyName;
        $fotoPerfil = $google_account_info->picture;

        // Si es la primera vez que inicia sesion con su cuenta de Google, se redirecciona a la pagina registroAPI. 
        // En donde se autocompletan los datos ya obtenidos de la cuenta de Google y se completan los datos faltantes para despues registrar el usuario en la base de datos.

        // Se inicia sesion en el home con la informacion de la cuenta de Google si ya ha iniciado sesion antes

    }

?>
