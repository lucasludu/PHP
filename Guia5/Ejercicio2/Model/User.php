<?php

    namespace Model;

    class User {

        private $username;
        private $password;
        private $fistname;
        private $lastname;
        private $email;

        public function __construct($username, $password, $fistname, $lastname, $email) {
            $this->username = $username;
            $this->password = $password;
            $this->fistname = $fistname;
            $this->lastname = $lastname;
            $this->email = $email;
        }

        /**
         * Get the value of username
         */ 
        public function getUsername() {
            return $this->username;
        }

        /**
         * Set the value of username
         *
         * @return  self
         */ 
        public function setUsername($username) {
            $this->username = $username;
            return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword() {
            return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password) {
            $this->password = $password;
            return $this;
        }

        /**
         * Get the value of fistname
         */ 
        public function getFistname() {
            return $this->fistname;
        }

        /**
         * Set the value of fistname
         *
         * @return  self
         */ 
        public function setFistname($fistname) {
            $this->fistname = $fistname;
            return $this;
        }

        /**
         * Get the value of lastname
         */ 
        public function getLastname() {
            return $this->lastname;
        }

        /**
         * Set the value of lastname
         *
         * @return  self
         */ 
        public function setLastname($lastname) {
            $this->lastname = $lastname;
            return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail() {
            return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email) {
            $this->email = $email;
            return $this;
        }

    }

?>