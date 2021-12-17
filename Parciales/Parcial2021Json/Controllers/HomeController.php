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
        
        public function ShowAddView($message = "") {
            require_once(VIEWS_PATH."business-add.php");
        } 

        public function Logout() {
            require_once(VIEWS_PATH."logout.php");
        } 
        
        public function List($message = "") {
            require_once(VIEWS_PATH."business-list.php");
        }  

        public function Login($userId, $email , $password, $btnLogin) {
            $user = $this->userDAO->GetByEmail($email);

            if(($user != null) && ($user->getPassword() === $password)) {
                $_SESSION["loggedUser"] = $user;
                $this->ShowAddView();
            } else {
                $this->Index("Usuario y/o Contraseña incorrectos");
            }
        }

    }
?>