<?php namespace Controllers;

    use Models\Business as Business;
    use DAO\BusinessDAO as BusinessDAO;

    class BusinessController {

        private $businessDAO;

        public function __construct() {
            $this->businessDAO = new BusinessDAO();
        }

        public function ShowAddView() {
            require_once(VIEWS_PATH."business-add.php");
        }

        public function ShowListView() {
            $businessList = $this->businessDAO->GetAll();
            require_once(VIEWS_PATH . "business-list.php");
        }

        public function ShowModifyView($businessId) {
            $loggedBusiness = NULL;
            $bus = $this->businessDAO->GetBusinessById($businessId);
            $loggedBusiness = $bus;
            if($loggedBusiness != NULL) {
                $_SESSION['loggedBusiness'] = $loggedBusiness;
                require_once(VIEWS_PATH."business-modify.php");
            }
        }

        public function Add($businessId, $category, $name, $email, $address, $button) {
            $bus = new Business();
            $bus->setBusinessId($businessId);
            $bus->setCategory($category);
            $bus->setName($name);
            $bus->setEmail($email);
            $bus->setAddress($address);

            $this->businessDAO->Add($bus);
            $this->ShowAddView();
        }

        public function Remove($businessId) {
            $this->businessDAO->Remove($businessId);
            $this->ShowListView();
        }

        public function ModifyBusiness($businessId, $category, $name, $email, $address, $button) {
            $businessModify = new Business();
            $businessModify->setBusinessId($businessId);
            $businessModify->setCategory($category);
            $businessModify->setName($name);
            $businessModify->setEmail($email);
            $businessModify->setAddress($address);

            $businessModified = $this->businessDAO->Modificar($businessId, $category, $name, $email, $address);
            if($businessModified != NULL) {
               $this->ShowListView();
            }
        }

    }

?>