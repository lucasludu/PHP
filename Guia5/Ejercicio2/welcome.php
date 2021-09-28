<?php 
    
    include('header.php'); 

    include_once("Model/User.php");
    use Model\User as User;

    session_start();
    if(isset($_SESSION['loggedUser'])) {
        $user = $_SESSION['loggedUser'];

?>

<div class="container">
    <h2 style="text-align: center;">HOLAAA</h2>
    <table class="table bg-light-alpha">
        <thead>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">Email</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $user->getUsername(); ?></td>
                <td><?php echo $user->getPassword(); ?></td>
                <td><?php echo $user->getFistname(); ?></td>
                <td><?php echo $user->getLastname(); ?></td>
                <td><?php echo $user->getEmail(); ?></td>
            </tr>
        </tbody>
    </table>
</div>

<?php 

    } else {
        echo "
            <script>
                alert('El usuario esta fuera de sesion, vuelva a intentarlo.');
                window.location = 'index.php';
            </script>
        ";
    }    

    include('footer.php'); 
    
?>
