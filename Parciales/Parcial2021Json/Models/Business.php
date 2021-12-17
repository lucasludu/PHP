<?php namespace Models;

    class Business {

        private $businessId;
        private $category;
        private $name;
        private $email;
        private $address;

        public function getBusinessId() { return $this->businessId; }
        public function getCategory() { return $this->category; }
        public function getName() { return $this->name; }
        public function getEmail() { return $this->email; }
        public function getAddress() { return $this->address; }

        public function setBusinessId($businessId) { $this->businessId = $businessId; }
        public function setCategory($category) { $this->category = $category; }
        public function setName($name) { $this->name = $name; }
        public function setEmail($email) { $this->email = $email; }
        public function setAddress($address) { $this->address = $address; }

    }

?>