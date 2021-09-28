<?php

    namespace Controller;

    include_once("../Model/User.php");
    use Model\User as User;

    if($_POST) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == "user@myapp.com" && $password == "123456") {

            session_start();

            $loggedUser = new User();
            $loggedUser->setUsername($username);
            $loggedUser->setPassword("123456");

            $_SESSION['loggedUser'] = $loggedUser;
            header("Location: ../add.php");  

        } else {

            echo "
                <script>
                    alert('Usuario o Contraseña Incorrecta, intente de nuevo.');
                    window.location = '../index.php';
                </script>
            ";

        }
    }

?>