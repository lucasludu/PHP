<?php namespace DAO;

    use \Exception as Exception;
    use Models\User as User;
    use DAO\IUserDAO as IUserDAO;

    class UserDAO implements IUserDAO{

        private $connection;
        private $tableName = "users";

        public function GetAll() {
            try {
                $userList = array();
                $query = "SELECT * FROM " . $this->tableName;
                $this->connection = Connection::getInstance();
                $resultSet = $this->connection->Execute($query);
                foreach($resultSet as $row) {
                    $user = new User();
                    $user->setEmail($row['email']);
                    $user->setPassword($row['password']);

                    array_push($userList, $user);
                }
                return $userList;
            } catch(Exception $ex) {
                throw $ex;
            }
        }

        public function GetByEmail($email) {
            $userList = $this->GetAll();
            foreach ($userList as $user) {
                if ($user->getEmail() == $email){
                    return $user;
                }
            }
            return null;
        }

    }


?>