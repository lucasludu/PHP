<?php

    $time = time();
    $fecha = date("Y-m-d", $time);

    echo "Hoy es: " . $fecha . "<br>";

    $dia = date('D');
    if ($dia == 'Mon') {
        echo 'Es Lunes';
    } else if ($dia == 'Tue') {
        echo 'Es Martes';
    } else if ($dia == 'Wed') {
        echo 'Es Miércoles';
    } else if ($dia == 'Thu') {
        echo 'Es Jueves';
    } else if ($dia == 'Fri') {
        echo 'Es Viernes';
    } else if ($dia == 'Sat') {
        echo 'Es Sábado';
    } else { //por descarte es domingo
        echo 'Es Domingo';
    }

?>