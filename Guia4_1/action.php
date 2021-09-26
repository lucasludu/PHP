<?php 

    $parameters = array();

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $parameters = $_POST;
    } else {
        $parameters = $_GET;
    }

    include_once("header.php") 

?>

<main align="center">
    <table class="table">

        <thead>
            TRABAJO PRACTICO N° 4.1
        </thead>

        <tr>
            <td>
                <b>Mensaje procesado</b>
                <hr>
                <p class="text-result-fmt">This is a real Message!</p>
                <?php echo $parameters['idioma'] . "<br>" . $parameters['accion'] . "<br>" . $parameters['mensaje']; ?>
            </td>
        </tr>
        <tr>
            <td>
                <a href="index.php">Volver a inicio</a>
            </td>
        </tr>

    </table>
</main>

<?php include_once("footer.php") ?>