<?php

if(isset($_POST["btnRegistroM"]))
    {
        $correo = $_SESSION['correo'];
        $CursoComentario = $_SESSION['ultimoCursoVisitado'];
        $texto = $_POST['txtComentario'];
        $calif = $_POST['selectCalificacion'];

        $query99 = "insert into comcal (FK_IDU, FK_IDC, Comentario, Calificación)
        values ('$correo','$CursoComentario','$texto','$calif')";
        $result99= mysqli_query($con, $query99);

        header("Location: ../Paginas/curso.php?idCursoSel=$CursoComentario");
    }

?>