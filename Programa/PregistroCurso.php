<?php 
include("db.php");

//Boton Registrar Curso
if(isset($_POST["btnRegistroC"]))
{
        $nombreC = $_POST['txtNombreCurso'];
        $categoriaC = $_POST['txtCategoriaCurso'];
        $precioC = $_POST['txtPrecioCurso'];
    
        //Subir Imagen
        $portadaC = '';
        if(isset($_FILES["fileImagenCurso"]))
        {
            $foto = $_FILES["fileImagenCurso"];
            $nombreFoto = $foto["name"];
            $tipoFoto = $foto["type"];
            $rutaTempoFoto = $foto["tmp_name"];
            $tamanoFoto = $foto["size"];
            $carpetaFoto = "../Imagenes/";
    
            $src = $carpetaFoto.$nombreFoto;
            move_uploaded_file($rutaTempoFoto, $src);
            $portadaC = "../Imagenes/".$nombreFoto;
        }
    
        //Subir Video
        $videoC = '';
        if(isset($_FILES["fileVideoPromoCurso"]))
        {
            $video = $_FILES["fileVideoPromoCurso"];
            $nombreVideo = $video["name"];
            $tipoVideo = $video["type"];
            $rutaTempoVideo = $video["tmp_name"];
            $tamanoVideo = $video["size"];
            $carpetaVideo = "../Videos/";
    
            $src = $carpetaVideo.$nombreVideo;
            move_uploaded_file($rutaTempoVideo, $src);
            $videoC = "../Videos/".$nombreVideo;
        }
        
        //Si modificas
        if (isset($_SESSION['CursoAEditar']))
        {
            $CursoEditando = $_SESSION['CursoAEditar'];

            if ($portadaC == "../Imagenes/")
            {
                $portadaC = $_SESSION['ImagenSinEditar'];
            }
            if ($videoC == "../Videos/")
            {
                $videoC = $_SESSION['VideoSinEditar'];
            }
            echo "<script type='text/javascript'> alert('$CursoEditando')</script>";
            $query = "update cursos set nombreC = '$nombreC', categoriaC = '$categoriaC', precioC = '$precioC', portadaC = '$portadaC', videoC = '$videoC' WHERE IDC = '$CursoEditando'";
            $result = mysqli_query($con, $query);
            echo "<script type='text/javascript'> alert('modifikado')</script>";
            $_SESSION['CursoAEditar'] = "";
        }
        //Si Agregas
        else
        {
        $query = "select * from cursos where nombreC = '$nombreC'";
        $result = mysqli_query($con, $query);
        if(!$result->num_rows > 0)
            {
                $iniciadoID = $_SESSION['id'];
                $query2 = "INSERT INTO cursos (nombreC, categoriaC, precioC, portadaC, videoC, profesorC) 
                VALUES ('$nombreC','$categoriaC', $precioC,'$portadaC','$videoC', '$iniciadoID')";
                $result2= mysqli_query($con, $query2);
                echo "<script type='text/javascript'> alert('Agregado Curso: ".($nombreC)."')</script>";
            }
            else
            {
            echo "<script type='text/javascript'> alert('Ya existe el Curso: ".($nombreC)."')</script>";
            }
        }
}

//Boton Registrar Modulo
if(isset($_POST["btnRegistroM"]))
{
    $nombreM = $_POST['txtNombreModulo'];
    $idDelCurso = $_POST['selectCurso'];

    $query = "select * from modulos where nombreM = '$nombreM'";
    $result = mysqli_query($con, $query);
   if(!$result->num_rows > 0)
        {
            $query2 = "INSERT INTO modulos (nombreM, FK_IDC) 
            VALUES ('$nombreM', $idDelCurso)";
            $result2= mysqli_query($con, $query2);
            echo "<script type='text/javascript'> alert('Agregado Modulo: ".($nombreM)."')</script>";
        }
    else
        {
        echo "<script type='text/javascript'> alert('Ya existe el Modulo: ".($nombreM)."')</script>";
        }
}

if(isset($_POST["btnRegistroL"]))
{
    $nombreL = $_POST['txtNombreLeccion'];
    $idDelModulo = $_POST['selectModulo'];
    $descripcionL = $_POST['txtTextoLeccion'];

    $archivoL = '';
    if(isset($_FILES["fileArchivoLeccion"]))
    {
        $archivo = $_FILES["fileArchivoLeccion"];
        $nombreArchivo = $archivo["name"];
        $tipoArchivo = $archivo["type"];
        $rutaTempoArchivo = $archivo["tmp_name"];
        $tamanoArchivo = $archivo["size"];
        $carpetaArchivo = "../Lecciones/";

        $src = $carpetaArchivo.$nombreArchivo;
        move_uploaded_file($rutaTempoArchivo, $src);
        $archivoL = "../Lecciones/".$nombreArchivo;
    }

    $query = "select * from lecciones where nombreL = '$nombreL'";
    $result = mysqli_query($con, $query);
   if(!$result->num_rows > 0)
        {
            $query2 = "INSERT INTO lecciones (nombreL, FK_IDM, descripcionL, videoL) 
            VALUES ('$nombreL', $idDelModulo, '$descripcionL', '$archivoL')";
            $result2= mysqli_query($con, $query2);
            echo "<script type='text/javascript'> alert('Agregado Modulo: ".($nombreL)."')</script>";
        }
    else
        {
        echo "<script type='text/javascript'> alert('Ya existe el Modulo: ".($nombreL)."')</script>";
        }
}

 ?>