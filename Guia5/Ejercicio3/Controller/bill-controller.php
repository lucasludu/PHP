<?php

    namespace Controller;
    require_once("../Config/Autoload.php");

    use Config\Autoload as Autoload;
    use Repository\BeerRepository as BeerRepository; 
    use Repository\IBeerRepository as IBeerRepository; 
    use Model\Beer as Beer;

    Autoload::Start();

    if($_POST) {
        $newBeer = new Beer();
        $newBeer->setCode($_POST['beer_code']); 
        $newBeer->setName($_POST['beer_name']); 
        $newBeer->setDescription($_POST['beer_description']); 
        $newBeer->setType($_POST['beer_type']); 
        $repository = new BeerRepository();
        $repository->Add($newBeer);

        echo "
            <script>
                alert('Birra Archivada con exito');
                window.location = '../list.php';
            </script>
        ";

    }

?>