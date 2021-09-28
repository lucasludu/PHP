<?php

    namespace Repository;

    use Repository\IBeerRepository as IBeerRepository;
    use Model\Beer as Beer;

    class BeerRepository implements IBeerRepository {

        private $beerList = array();
        private $filename;

        public function __construct() {
            $this->filename = dirname(__DIR__) . "/Data/beer.json";
        }
        
        private function SaveData() {
            $arrayToDecode = array();

            foreach($this->beerList as $beer) {
                $valuesArray['beer_code'] = $beer->getCode();
                $valuesArray['beer_name'] = $beer->getName();
                $valuesArray['beer_description'] = $beer->getDescription();
                $valuesArray['beer_type'] = $beer->getType();

                array_push($arrayToDecode, $valuesArray);
            }
            $jsonContent = json_encode($arrayToDecode, JSON_PRETTY_PRINT);
            file_put_contents($this->filename, $jsonContent);
        }

        private function RetrieveData() {
            $this->beerList = array();

            if(file_exists($this->filename)) {
                $jsonContent = file_get_contents($this->filename);
                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();
            
                foreach($arrayToDecode as $value) {
                    $beer = new Beer();
                    $beer->setCode($value['beer_code']);
                    $beer->setName($value['beer_name']);
                    $beer->setDescription($value['beer_description']);
                    $beer->setType($value['beer_type']);

                    array_push($this->beerList, $beer);
                }
            }
        }


        public function Add(Beer $newBeer) {
            $this->RetrieveData();
            array_push($this->beerList, $newBeer);
            $this->SaveData();
        }

        public function GetAll() {
            $this->RetrieveData();
            return $this->beerList;
        }

        public function Delete($code) {
            $this->RetrieveData();
            $newList = array();
            foreach($this->beerList as $beer) {
                if($beer->getCode() != $code) {
                    array_push($newList, $beer);
                }
            }
            $this->beerList = $newList;
            $this->SaveData();
        }

    }

?>