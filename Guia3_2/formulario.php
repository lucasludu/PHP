<?php

    $parameters = array();

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $parameters = $_POST;
    } else {
        $parameters = $_GET;
    }

?>

<?php include_once("header.php") ?>

<div class="container">
    <table class="table">

        <tr>
            <th colspan="2" class="table-dark">1 - YOUR BASIC INFO:</th>
        </tr>

        <tr>
            <th>Firstn and Last name</th>
            <td><?php echo $parameters['firstname'] . " " . $parameters['lastname']; ?></td>
        </tr>

        <tr>
            <th>Email</th>
            <td><?php echo $parameters['email']; ?></td>
        </tr>

        <tr>
            <th>Password</th>
            <td><?php echo $parameters['password']; ?></td>
        </tr>

        <tr>
            <th>Birthday</th>
            <td><?php echo $parameters['birthday']; ?></td>
        </tr>

        <tr>
            <th>Sex</th>
            <td><?php 
                if(isset($parameters['sex'])) {
                    echo $parameters['sex'] == "Male" ? "Masculino"  : "Femenino";
                } else {
                    echo "- Sin indicar -";
                }
            ?></td>
        </tr>

        <tr>
            <th colspan="2" class="table-dark">2 - YOUR PROFILE:</th>
        </tr>

        <tr>
            <th>About You</th>
            <td><?php 
                if(isset($parameters['aboutYou']) && $parameters['aboutYou'] != "") {
                    echo $parameters['aboutYou'];
                } else {
                    echo "- Sin indicar -";
                }
            ?></td>
        </tr>

        <tr>
            <th>Role</th>
            <td><?php echo $parameters['user_role']; ?></td>
        </tr>

        <tr>
            <th>Interest</th>
            <td><?php 
                $initValue = "interest_";
                foreach($parameters as $parameterName=> $parameterValue){
                    if(substr($parameterName, 0, strlen($initValue)) === $initValue){//String functions
                      $nameValue = ltrim($parameterName, $initValue);
                      echo ucfirst($nameValue) . '<br>';
                    }                    
                }
            ?></td>
        </tr>

    </table>
    
    <a class="ref" href="index.php">Regresar al Formulario</a>

</div>

<?php include_once("footer.php") ?>