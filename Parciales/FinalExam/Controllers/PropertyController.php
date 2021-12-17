<?php namespace Controllers;

    use Models\Property as Property;
    use DAO\PropertyDAO as PropertyDAO;

    class PropertyController {

        private $propertyDAO;

        public function __construct() {
            $this->propertyDAO = new PropertyDAO();
        }

        public function ShowAddView() {
            require_once(VIEWS_PATH . "property-add.php");
        }

        public function ShowListView() {
            $propertyList = $this->propertyDAO->GetAll();
            require_once(VIEWS_PATH . "property-list.php");
        }

        public function Add($propertyId, $address, $phone, $price, $button) {
            $property = new Property();
            $property->setCode($propertyId);
            $property->setAddress($address);
            $property->setPhone($phone);
            $property->setPrice($price);

            $this->propertyDAO->Add($property);
            $this->showAddView();
        }

        public function Delete($propertyId, $button) {
            $this->propertyDAO->Delete($propertyId);
            $this->ShowListView();
        }
    }


?>