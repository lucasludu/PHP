<?php namespace DAO;

    use \Exception as Exception;
    use Models\Property as Property;
    use DAO\IPropertyDAO as IPropertyDAO;
    use DAO\Connection as Connection;

    class PropertyDAO implements IPropertyDAO {

        private $connection;
        private $tableName = "properties";

        public function Add(Property $property) {
            try {
                $query = "INSERT INTO " . $this->tableName . " (propertyId, address, phone, price) VALUES (:propertyId, :address, :phone, :price)";
                $parameters['propertyId'] = $property->getCode();
                $parameters['address'] = $property->getAddress();
                $parameters['phone'] = $property->getPhone();
                $parameters['price'] = $property->getPrice();

                $this->connection = Connection::GetInstance();
                $this->connection->ExecuteNonQuery($query, $parameters);
            } catch(\Exception $ex) {
                throw $ex;
            }
        }

        public function GetAll() {
            try {
                $propertyList = array();
                $query = "SELECT * FROM " . $this->tableName;

                $this->connection = Connection::GetInstance();
                $resultSet = $this->connection->Execute($query);

                foreach($resultSet as $row) {
                    $property = new Property();
                    $property->setCode($row['propertyId']);
                    $property->setAddress($row['address']);
                    $property->setPhone($row['phone']);
                    $property->setPrice($row['price']);

                    array_push($propertyList, $property);
                }
                return $propertyList;
            } catch(\Exception $ex) {
                throw $ex;
            }
        }

        public function GetByCode($code) {
            try {
                $propertyList = array();
                $query = "SELECT * FROM " . $this->tableName . " WHERE (propertyId=:propertyId)";
                $parameters['propertyId'] = $code;

                $this->connection = Connection::GetInstance();
                $resultSet = $this->connection->Execute($query, $parameters);

                foreach($resultSet as $row) {
                    $property = new Property();
                    $property->setCode($row['propertyId']);
                    $property->setAddress($row['address']);
                    $property->setPhone($row['phone']);
                    $property->setPrice($row['price']);

                    array_push($propertyList, $property);
                }
                return $propertyList[0];
            } catch(\Exception $ex) {
                throw $ex;
            }
        }

        public function Delete($code) {
            try {
                $query = "DELETE FROM " . $this->tableName . " WHERE (propertyId=:propertyId)";
                $parameters['propertyId'] = $code;

                $this->connection = Connection::GetInstance();
                return $count = $this->connection->ExecuteNonQuery($query, $parameters);
            } catch(\Exception $ex) {
                throw $ex;
            }
        }
        
    }

?>