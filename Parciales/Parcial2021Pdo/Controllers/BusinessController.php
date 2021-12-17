<?php namespace Controllers;

    use Models\Business as Business;
    use DAO\BusinessDAO as BusinessDAO;

    class BusinessController {
        private $businessDAO;

        public function __construct() {
            $this->businessDAO = new BusinessDAO;
        }

        public function ShowAddView() {
            require_once(VIEWS_PATH . "business-add.php");
        }

        public function ShowListView() {
            $businessList = $this->businessDAO->GetAll();
            require_once(VIEWS_PATH . "business-list.php");
        }

        public function Add($businessId, $category, $name, $email, $address, $button) {
            $business = new Businness();
            $business->setBusinessId($businessId);   
            $business->setCategory($category);   
            $business->setName($name);   
            $business->setEmail($email);   
            $business->setAddress($address);
            
            $this->businessDAO->Add($business);
            $this->ShowAddView();
        }

        public function Delete($businessId, $button) {
            $this->businessDAO->Delete($businessId);
            $this->ShowListView();
        }


    }

?>