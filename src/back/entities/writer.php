<?php

    namespace back {
        
        class Writer {
            private $id;
            private $name;
            private $description;

            public function createId() {
                $this->id = uniqid();
            }

            public function fake_construct($name, $description){
                $this->name = $name;
                $this->description = $description;
            }

            public function setId($id){
                $this->id = $id;
            }

            public function getId(){
                return $this->id;
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