<?php namespace DAO;

    use \Exception as Exception;
    use Models\User as User;
    use DAO\IUserDAO as IUserDAO;
    use DAO\Connection as Connection;

    class UserDAO implements IUserDAO {

        private $connection;
        private $tableName = "users";

        public function GetAll() {
            try {
                $userList = array();
                $query = "SELECT * FROM " . $this->tableName;

                $this->connection = Connection::GetInstance();
                $resultSet = $this->connection->Execute($query);

                foreach($resultSet as $row) {
                    $user = new User();
                    $user->setUserId($row['userId']);
                    $user->setEmail($row['email']);
                    $user->setPassword($row['password']);

                    array_push($userList, $user);
                }
                return $userList;
            } catch(\Exception $ex) {
                throw $ex;
            }
        }

        public function GetByEmail($email) {
            try {
                $userList = array();
                $query = "SELECT * FROM " . $this->tableName . " WHERE (email=:email)";
                $parameters['email'] = $email;

                $this->connection = Connection::GetInstance();
                $resultSet = $this->connection->Execute($query, $parameters);

                foreach($resultSet as $row) {
                    $user = new User();
                    $user->setUserId($row['userId']);
                    $user->setEmail($row['email']);
                    $user->setPassword($row['password']);

                    array_push($userList, $user);
                }
                return $userList[0];
            } catch(\Exception $ex) {
                throw $ex;
            }
        }
        
    }

?>