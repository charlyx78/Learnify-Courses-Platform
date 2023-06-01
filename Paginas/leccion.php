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
include("../Programa/db.php");
$idLeccion = $_GET["idLeccionSel"];
$correoUsuarioPasado = $_SESSION['correo'];
$siEntro = 0;

$query = "select nombreL, FK_IDM from lecciones where IDL = $idLeccion";
$resultado = mysqli_query($con, $query);
if($resultado)
{
    $row = $resultado->fetch_assoc();
    $nombreLeccion = $row['nombreL'];
    $idModulo = $row['FK_IDM'];

    $query2 = "select FK_IDC from modulos where IDM = $idModulo";
    $resultado2 = mysqli_query($con, $query2);
    if($resultado2)
    {
        $row2 = $resultado2->fetch_assoc();
        $idCurso = $row2['FK_IDC'];

        $query3 = "select FK_IDU from cursos_comprados where FK_IDC = $idCurso";
        $resultado3 = mysqli_query($con, $query3);
        if($resultado3->num_rows > 0)
        {
            while($row3 = $resultado3->fetch_array())
            {
                $correoComprado = $row3['FK_IDU'];
                if($correoComprado == $correoUsuarioPasado)
                {
                    $query56 = "update leccionvista set Vista = 1 where FK_Leccion = $idLeccion";
                    $resultado56 = mysqli_query($con, $query56);
                    $siEntro = 1;
                }
            }
            if($siEntro == 0)
            {
                header("Location: ../Paginas/curso.php?idCursoSel=$idCurso");
            }
        }
        else
        {
            header("Location: ../Paginas/curso.php?idCursoSel=$idCurso");
        }
    }
}

?>
|   <main class="contenido container">
        <div class="contenedor-leccion mb-2">
            <div class="contenedor-botones-leccion btn-group d-flex justify-content-between mb-3">
                <button class="btn btn-lg borde-secundario">Anterior</button>
                <button class="btn btn-lg borde-terciario">Enviar mensaje al profesor</button>
                <button class="btn btn-lg borde-secundario">Siguiente</button>
            </div>
            <div class="contenido-leccion w-100 border border-secondary mb-4" style="height: 60vh;">
                <!-- si es video -->
                <video class="w-100 h-100" src="" controls></video>
            </div>
            <div class="descripcion-contenido-leccion">
            <p> <?php echo $nombreLeccion ?> Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio possimus deserunt eum blanditiis pariatur praesentium perferendis ea fugit itaque iusto dolor, quaerat magnam tempore labore quos ut unde? Magni, dicta.</p>
        </div>
        </div>
    </main>
<?php include ('../footer.php'); ?>
    
</body>
</html>