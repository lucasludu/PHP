<?php

    function mayor($a, $b, $c, $d) {
        if($a > $b) {
            if($a > $c) {
                if($a > $d) {
                    echo $a . " es mayor que " . $b . " " . $c . " " . $d;
                } else {
                    echo $d . " es mayor que " . $a . " " . $b . " " . $c;
                }
            } else {
                if($c > $d) {
                    echo $c . " es mayor que " . $a . " " . $b . " " . $d;
                } else {
                    echo $d . " es mayor que " . $a . " " . $b . " " . $c;
                }
            }
        } else {
            if($b > $c) {
                if($b > $d) {
                    echo $b . " es mayor que " . $a . " " . $c . " " . $d;
                } else {
                    echo $d . " es mayor que " . $a . " " . $b . " " . $c;
                }
            } else {
                if($c > $d) {
                    echo $c . " es mayor que " . $a . " " . $b . " " . $d;
                } else {
                    echo $d . " es mayor que " . $a . " " . $b . " " . $c;
                }
            }
        }
    }

    function otroMayor($a, $b, $c, $d) {
        if(($a > $b) && ($a > $c) && ($a > $d)) {
            echo "A es mayor = " . $a;
        } else if(($b > $a) && ($b > $c) && ($b > $d)) {
            echo "B es mayor = " . $b;
        } else if(($c > $a) && ($c > $b) && ($c > $d)) {
            echo "C es mayor = " . $c;
        } else {
            echo "D es mayor = " . $d;
        }
    }

    mayor(11, 22, 13, 4);
    echo "<br>";
    otroMayor(11, 22, 13, 4);

?>