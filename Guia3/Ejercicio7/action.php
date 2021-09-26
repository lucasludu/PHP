<?php

    if($_POST['total_sale'] < 200) {
        if($_POST['type'] === "mascota") {
            echo "No se puede realizar el envio";
        } else if($_POST['type'] === "ropa") {
            echo "Los gastos de envio son 80 pesos";
        }
    }

    if($_POST['total_sale'] >= 200 && $_POST['total_sale'] <= 600)  {
        echo "Los gastos de envio son de 80 pesos";
    }

    if($_POST['total_sale'] > 600) {
        echo "Los gastos de envio son gratis. <br>";
    }

    if($_POST['total_sale'] > 2000) {
        echo "Usted recibe un codigo de descuento = CODEDESC33";
    }

?>