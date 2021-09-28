<?php

    namespace Controller;

    include_once("../Model/User.php");
    use Model\User as User;

    $users = array();
    
    $user1 = new User('SSoler', 'cosme1234', 'Sebastian', 'Soler', 'sebastian@utn.com');
    $user2 = new User('AzarJ', 'alAzar123', 'Juan', 'Azar', 'juan_azar@utn.com');
    $user3 = new User('Mari123', '123456Mari', 'Maria', 'Perez', 'mariap@utn.com'); 
 
    $users[] = $user1;
    $users[] = $user2;
    $users[] = $user3;

    $loggedUser = NULL;

    if($_POST) {
        foreach($users as $key => $value) {
            if($_POST['username'] == $value->getUsername()) {
                if($_POST['password'] == $value->getPassword()) {
                    $loggedUser = $value;
                }
            }
        }
    }
     
    if($loggedUser != NULL) {
        session_start();
        $_SESSION['loggedUser'] = $loggedUser;
        header("Location: ../welcome.php");
    } else {
        echo "
            <script>
                alert('Verificar que los datos ingresados sean los correctos.');
                window.location = '../index.php';
            </script>
        ";
    }


?>