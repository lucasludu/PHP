<?php namespace DAO;

    use Models\User as User;
    use DAO\IUserDAO as IUserDAO;

    class UserDAO implements IUserDAO {

        private $userList = array();

        private function RetrieveData() {
            $this->userList = array();

            if(file_exists('Data/users.json')) {
                $jsonContent = file_get_contents('Data/users.json');
                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

                foreach($arrayToDecode as $valuesArray) {
                    $user = new User();
                    $user->setUserId($valuesArray['userId']);
                    $user->setEmail($valuesArray['email']);
                    $user->setPassword($valuesArray['password']);

                    array_push($this->userList, $user);
                }
            }
        }

        private function SaveData() {
            $arrayToEncode = array();

            foreach($this->userList as $user) {
                $valuesArray["userId"] = $user->getUserId();
                $valuesArray["email"] = $user->getEmail();
                $valuesArray["password"] = $user->getPassword();

                array_push($arrayToEncode, $valuesArray);
            }
            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
            file_put_contents('Data/users.json', $jsonContent);
        }

        private function GetUserLastId() {
            $id = 0;
            foreach($this->userList as $user) {
                $id = ($user->getUserId() > $id) ? $user->getUserId() : $id;
            }
            return $id + 1;
        }

        public function Add(User $user) {
            $this->RetrieveData();
            $user->setUserId($this->GetUserLastId());
            array_push($this->userList, $user);
            $this->SaveData();
        }

        public function GetAll() {
            $this->RetrieveData();
            return $this->userList;
        }

        public function GetByEmail($email) {
            $user = null;
            $this->RetrieveData();
            $users = array_filter($this->userList, function($user) use($email){
                return $user->getEmail() == $email;
            });
            $users = array_values($users); 
            return (count($users) > 0) ? $users[0] : null;
        }

    }

?>