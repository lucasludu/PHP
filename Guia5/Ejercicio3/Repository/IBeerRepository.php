<?php

    namespace Repository;
    use Model\Beer as Beer;

    interface IBeerRepository {
        
        function Add(Beer $newBeer);
        function Delete($code);
        function GetAll();

    }

?>