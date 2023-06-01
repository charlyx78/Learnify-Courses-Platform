<?php
    include('../Programa/db.php');
    
    $idCurso = $_POST["idCurso"];

    $query = "select * from cursos_comprados where FK_IDC = $idCurso";
    $resultado = mysqli_query($con, $query);
    if ($resultado)
    {
        while($row = $resultado->fetch_array())
    {
        $idAlumnoInscrito = $row['FK_IDU'];
        $fechaCompra = $row['fechaCompra'];
        $fechaFinalizacion = $row['fechaFinalizacion'];

        $query2 = "select nombre, apellidoPaterno, apellidoMaterno from usuarios where correo = '$idAlumnoInscrito'";
        $resultado2 = mysqli_query($con, $query2);
        if ($resultado2)
        {
            $row2 = $resultado2->fetch_assoc();
            $NombreAlumnoInscrito = $row2['nombre'];
            $ApPaAlumnoInscrito = $row2['apellidoPaterno'];
            $ApMaAlumnoInscrito = $row2['apellidoMaterno'];
            $NombreCompletoAlIns = $NombreAlumnoInscrito.' '.$ApPaAlumnoInscrito.' '.$ApMaAlumnoInscrito;

            $query3 = "select precioC from cursos where IDC = $idCurso";
            $resultado3 = mysqli_query($con, $query3);
            if ($resultado3)
            {
                $row3 = $resultado3->fetch_assoc();
                $precioCurso = $row3['precioC'];
            }

            echo "
            <tr>
            <td>$NombreCompletoAlIns</td>
            <td>$fechaCompra</td>
            <td>50 %</td>
            <td>$$precioCurso</td>
            <td>Paypal</td>
            </tr>
            ";

        }
    }
    }
?>