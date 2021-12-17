<?php namespace Models;

    class Property {

        private $code;
        private $address;
        private $phone;
        private $price;

        public function getCode() { return $this->code; }
        public function getAddress() { return $this->address; }
        public function getPhone() { return $this->phone; }
        public function getPrice() { return $this->price; }

        public function setCode($code) { $this->code = $code; }
        public function setAddress($address) { $this->address = $address; }
        public function setPhone($phone) { $this->phone = $phone; }
        public function setPrice($price) { $this->price = $price; }

    }

?>