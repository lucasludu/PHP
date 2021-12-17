<?php namespace Controllers;

    use Models\User as User;
    use DAO\UserDAO as UserDAO;

    class HomeController {

        private $userDAO;

        public function __construct() {
            $this->userDAO = new UserDAO();
        }

        public function Index($message = "") {
            require_once(VIEWS_PATH."index.php");
        } 
        
        public function Add($message = "") {
            require_once(VIEWS_PATH."business-add.php");
        } 

        public function Logout() {
            require_once(VIEWS_PATH."logout.php");
        } 
        
        public function List($message = "") {
            require_once(VIEWS_PATH."business-list.php");
        } 
        
        public function Login($email, $password, $btnLogin) {
            $user = $this->userDAO->GetByEmail($email);
            if($user != NULL && ($user->getPassword() === $password)) {
                $_SESSION['loggedUser'] = $user;
                $this->Add();
            } else {
                $this->Index("User y/o contraseña invalida.");
            }
        }
    }
?>