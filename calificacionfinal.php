<?php
    $nom_aprendiz = $_POST['nom_aprendiz'];
    $asignatura = $_POST['asignatura'];
    $Calificacion_final = $_POST['Calificacion_final'];

    echo $nom_aprendiz;
    echo "<br>";
    echo $asignatura;
    echo "<br>";


    if($Calificacion_final>7){
        {
        echo " aprobado ";
        }
    }if($Calificacion_final<7){
        {
        echo " desaprobado ";
        }
    }


?>