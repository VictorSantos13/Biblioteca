<?php
    namespace back {

        class Book {
            private $id;
            private $title;
            private $description;
            private Writer $writer;

            public function createId() {
                $this->id = uniqid();
            }

            public function getId(){
                return $this->id;
            }

            public function getTitle(){
                return $this->title;
            }

            public function setTitle($title){
                $this->title = $title;
            }

            public function getDescription(){
                return $this->description;
            }     
            
            public function setDescription($description){
                $this->description = $description;
            }  

            public function getWriter(){
                return $this->writer;
            }

            public function setWriter(Writer $writer){
                $this->writer = $writer;
            }
        }
    }
?>