<?php

    function operation($op, $n1, $n2) {
        if($op == "*") {
            $rta = $n1 * $n2;
        } else if($op == "/") {
            $rta = $n1 / $n2;
        } else {
            echo "Operacion Invalida";
        }
        return $rta;
    }

    echo "Rta: " . operation("*", 3, 5) . "<br>";
    echo "Rta: " . operation("/", 3, 5) . "<br>";
    echo "Rta: " . operation("-", 3, 5) . "<br>";

?>