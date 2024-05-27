<?php
    namespace back {

        class Gender {
            private $id;
            private $name;
            private $description;

            public function fake_construct($name, $description){
                $this->name = $name;
                $this->$description = $description;
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

            public function getDescription(){
                return $this->description;
            }     
            
            public function setDescription($description){
                $this->description = $description;
            }  
        }
    }
?>