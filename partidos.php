<?php
    $partidos_ganados = $_POST['partidos_ganados'];
    $partidos_perdidos = $_POST['partidos_perdidos'];
    $partidos_empatados = $_POST['partidos_empatados'];

    $suma = ($partidos_ganados*3)+($partidos_perdidos*0)+($partidos_empatados*1);

    echo "el resultado es".$suma;
?>