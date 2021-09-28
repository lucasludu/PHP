<?php

    namespace Controller;
    require_once("../Config/Autoload.php");

    use Config\Autoload as Autoload;
    use Model\Beer as Beer;
    use Repository\BeerRepository as BeerRepository;
    use Repository\IBeerRepository as IBeerRepository;

    Autoload::Start();

    if($_POST) {
        $beerCode = $_POST['btnRemove'];

        $repository = new BeerRepository();
        $repository->Delete($beerCode);

        echo "
            <script>
                alert('Se elimino Correctamente');
                window.location = '../list.php';
            </script>
        ";

    }

?>