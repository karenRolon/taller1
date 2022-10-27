<?php
    $Volantes = $_POST['Volantes'];
    $Posters = $_POST['Posters'];
    $Tdepres = $_POST['Tdepres'];

    echo "total de los volantes: ".$Volantes*2000;
    echo "<br>";
    echo "total de los Posters: " .$Posters*5000;
    echo "<br>";
    echo "total de los Tdepres: " .$Tdepres*500;
    echo "<br>";

    $suma = ($Volantes*2000)+($Posters*5000)+($Tdepres*500);

    echo "el pago total es".$suma;
?>