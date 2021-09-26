<?php

    namespace Controller;

    include_once("../Config/Autoload.php");
    use Model\Bill as Bill;

    if($_GET) {

        $time = time();
        $fecha = date("Y-m-d", $time);

        if($_GET['bill_date'] < $fecha) {

            header("Location: ../bill-content.php");

        } else {

            echo "
                <script>
                    alert('Fecha invalida');
                    window.location = '../add-bill.php';
                </script>
            ";
            exit();

        }

    }


?>