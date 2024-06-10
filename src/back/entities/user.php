<?php
    namespace back {

        class User {
            private $id;
            private $name;
            private $email;
            private $password;

            public function fake_construct($name, $email, $password){
                $this->name = $name;
                $this->email = $email;
                $this->password = $password;
            }

            public function __construct(){}

            public function createId() {
                $this->id = uniqid();
            }

            public function getId(){
                return $this->id;
            }

            public function setId($id){
                $this->id = $id;
            }

            public function getName(){
                return $this->name;
            }

            public function setName($name){
                $this->name = $name;
            }

            public function getEmail(){
                return $this->email;
            }     
            
            public function setEmail($email){
                $this->email = $email;
            }

            public function getPassword(){
                return $this->password;
            }     
            
            public function setPassword($password){
                $this->password = $password;
            }

            public function hashPassword(){
                $this->password = hash("sha256", $this->password);
            }
        }
    }
?>