<?php
    $nom_estudiante = $_POST['nom_estudiante'];
    $nom_asignatura = $_POST['nom_asignatura'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $promedio = ($nota1+$nota2+$nota3)/3;

    echo $nom_estudiante;
    echo "<br>";
    echo $nom_asignatura;
    echo "<br>";
    echo "la nota del estudiante es" .$promedio;

?>