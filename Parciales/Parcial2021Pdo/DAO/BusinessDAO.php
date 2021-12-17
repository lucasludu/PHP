<?php namespace DAO;

    use \Exception as Exception;
    use Models\Business as Business;
    use DAO\IBusinessDAO as IBusinessDAO;

    class BusinessDAO implements IBusinessDAO {

        private $connection;
        private $tableName = "businesses";

        public function Add(Business $business) {
            try {
                $query = "INSERT INTO " . $this->tableNmae . "(businessId, category, name, email, address) VALUES (:businessId, :category, :name, :email, :address)";
                $parameters['businessId'] = $business->getBusinessId();
                $parameters['category'] = $business->getCategory();
                $parameters['name'] = $business->getName();
                $parameters['email'] = $business->getEmail();
                $parameters['address'] = $business->getAddress();

                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $parameters);
            } catch(\Exception $ex) {
                throw $ex;
            }
        }

        public function GetAll() {
            try {
                $businessList = array();
                $query = "SELECT * FROM " . $this->tableName;

                $this->connection = Connection::GetInstance();
                $resultSet = $this->connection->Execute($query);

                foreach($resultSet as $row) {
                    $business = new Business();
                    $business->setCategory($row['category']);
                    $business->setName($row['name']);
                    $business->setEmail($row['email']);
                    $business->setAddress($row['address']);

                    array_push($businessList, $business);
                }
                return $businessList;
            } catch(\Exception $ex) {
                throw $ex;
            }
        }

        public function Delete($businessId) {
            try {
                $query = "DELETE FROM ".$this->tableName." WHERE (businessId = :businessId)";
                $parameters["businessId"] =  $businessId;
    
                $this->connection = Connection::GetInstance();
                return $count=$this->connection->ExecuteNonQuery($query, $parameters);
            } catch(\Exception $e) {
                throw $ex;
            }
        }

    }

?>