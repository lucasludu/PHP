<?php namespace DAO;

    use Models\Business as Business;
    use DAO\IBusinessDAO as IBusinessDAO;

    class BusinessDAO implements IBusinessDAO {

        private $businessList = array();

        private function RetrieveData() {
            $this->businessList = array();
            if(file_exists('Data/business.json')) {
                $jsonContent = file_get_contents('Data/business.json');
                $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();
                foreach($arrayToDecode as $valuesArray) {
                    $business = new Business();
                    $business->setBusinessId($valuesArray['businessId']);
                    $business->setCategory($valuesArray['category']);
                    $business->setName($valuesArray['name']);
                    $business->setEmail($valuesArray['email']);
                    $business->setAddress($valuesArray['address']);
                    array_push($this->businessList, $business);
                }
            }
        }

        private function SaveData() {
            $arrayToEncode = array();
            foreach($this->businessList as $business) {
                $valuesArray["businessId"] = $business->getBusinessId();
                $valuesArray["category"] = $business->getCategory();
                $valuesArray["name"] = $business->getName();
                $valuesArray["email"] = $business->getEmail();
                $valuesArray["address"] = $business->getAddress();
                array_push($arrayToEncode, $valuesArray);
            }
            $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
            file_put_contents('Data/business.json', $jsonContent);
        }

        private function GetBusinessLastId() {
            $id = 0;
            foreach($this->businessList as $business) {
                $id = ($business->getBusinessId() > $id) ? $business->getBusinessId() : $id;
            }
            return $id + 1;
        }

        public function Add(Business $business) {
            $this->RetrieveData();
            $business->setBusinessId($this->GetBusinessLastId());
            array_push($this->businessList, $business);
            $this->SaveData();
        }

        public function GetAll() {
            $this->RetrieveData();
            return $this->businessList;
        }

        public function Remove($id) {            
            $this->RetrieveData();
            $this->businessList = array_filter($this->businessList, function($business) use($id) {                
                return $business->getBusinessId() != $id;
            });
            $this->SaveData();
        }

        /*
        public function GetBusinessById($id) {
            $this->RetrieveData();
            $findBusiness = NULL;
            if(!empty($this->businessList)) {
                foreach($this->businessList as $business) {
                    if($business->getBusinessId() == $id) {
                        $index = array_search($business, $this->businessList);
                        $findBusiness = $this->businessList[$index];
                    }
                }
            }
            return $findBusiness;
        }
        */

        public function GetBusinessById($businessId) {
            $bus = null;
            $this->RetrieveData();
            $business = array_filter($this->businessList, function($bus) use($businessId){
                return $bus->getBusinessId() == $businessId;
            });
            $business = array_values($business); 
            return (count($business) > 0) ? $business[0] : null;
        }

        public function Modificar($businessId, $category, $name, $email, $address) {
            $modifyBusiness = $this->GetBusinessById($businessId);
            var_dump($modifyBusiness);
            $modifyBusiness->setBusinessId($businessId);
            $modifyBusiness->setCategory($category);
            $modifyBusiness->setName($name);
            $modifyBusiness->setEmail($email);
            $modifyBusiness->setAddress($address);

            $this->SaveData();
        }


    }

?>