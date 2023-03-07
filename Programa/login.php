<?php
    session_start();
    include("db.php");

    if(isset($_POST["btnLogin"]))
    {
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
            header("Location: ../Paginas/home.php");
            //echo "<script type='text/javascript'> alert('Sesion Iniciada Correctamente')</script>";
            }
        else
            {
            echo "No existe usuario";
            //echo "<script type='text/javascript'> alert('Correo o Contraseña Incorrectos')</script>";
            }
        }
        else
        {
            echo "no hay cuentas";
        }
    }

    if(isset($_POST["btnRegistro"]))
    {
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
                echo "Correo en uso Pa";
                //echo "<script type='text/javascript'> alert('Correo Ya Existe')</script>";
            }
    }

    require_once '../vendor/autoload.php';
    // Se declaran las credenciales de la API de Google
    $clientID = '539426120680-lvogna6eo124iulgdv6sfg83nujce42n.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'http://localhost/Learnify/Paginas/registroAPI.php';

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
        // En donde se completan los datos faltantes y se registra el usuario en la base de datos.

        // Se inicia sesion con la informacion de la cuenta de Google si ya ha iniciado sesion antes

    }

?>
