<?php

    namespace Controller;
    
    include_once("../Config/Autoload.php");
    use Model\Client as Client;

    $allowedUser = "Fernando Robles";
    $allowedPass = "123456";

    if($_POST) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        if(($username == $allowedUser) && ($password == $allowedPass)) {

            header("Location: ../add-bill.php");

        } else {

            echo "
                <script>
                    alert('Usuario o Contraseña Invalida');
                    window.location = '../index.php';
                </script>
            ";

        }

    } else {

        echo "
            <script>
                alert('No se pudo ingresar.');
                window.location = '../index.php';
            </script>
        ";

    }

?>