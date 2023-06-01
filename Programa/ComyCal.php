<?php

if(isset($_POST["btnRegistroM"]))
    {
        $correo = $_SESSION['correo'];
        $CursoComentario = $_SESSION['ultimoCursoVisitado'];
        $texto = $_POST['txtComentario'];
        $calif = $_POST['selectCalificacion'];

        $query99 = "insert into comcal (FK_IDU, FK_IDC, Comentario, Calificación)
        values ('$correo','$CursoComentario','$texto','$calif')";

        $query100 = "UPDATE cursos C 
                    INNER JOIN comcal CC ON C.IDC = CC.FK_IDC
                    SET C.califC = ((SELECT SUM(Calificación) FROM comcal WHERE FK_IDC = '$CursoComentario') / (SELECT COUNT(*) FROM comcal WHERE FK_IDC = '$CursoComentario'))
                    WHERE C.IDC = '$CursoComentario'";

        $result99= mysqli_query($con, $query99);
        $result100= mysqli_query($con, $query100);

        header("Location: ../Paginas/curso.php?idCursoSel=$CursoComentario");
    }

?>