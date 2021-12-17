<?php namespace Controllers;

    use Models\User as User;
    use Models\Property as Property;
    use DAO\UserDAO as UserDAO;
    use DAO\PropertyDAO as PropertyDAO;

    class HomeController {

        private $userDAO;
        private $propertyDAO;

        public function __construct() {
            $this->userDAO = new UserDAO();
            $this->propertyDAO = new PropertyDAO();
        }

        public function Index() {
            require_once(VIEWS_PATH."index.php");
        }

        public function ShowListView() {
            $propertyList = $this->propertyDAO->GetAll();
            require_once(VIEWS_PATH . "property-list.php");
        }

        public function Logout() {
            require_once(VIEWS_PATH . "logout.php");
        }

        public function Login($email, $password, $btnLogin) {
            $user = $this->userDAO->GetByEmail($email);
            if($user != null && ($user->getPassword() === $password)) {
                $_SESSION['loggedUser'] = $user;
                $this->ShowListView();
            } else {
                $this->Index();
            }
        }
    }
?>