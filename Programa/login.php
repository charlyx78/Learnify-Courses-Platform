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
?>
