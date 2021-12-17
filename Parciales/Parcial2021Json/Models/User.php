<?php namespace Models;

    class User {

        private $userId;
        private $email;
        private $password;
 
        public function getUserId() { return $this->userId; }
        public function getEmail() { return $this->email; }
        public function getPassword() { return $this->password; }

        public function setUserId($userId) { $this->userId = $userId; }
        public function setEmail($email) { $this->email = $email; }
        public function setPassword($password) { $this->password = $password; }

    }

?>