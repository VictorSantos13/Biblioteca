<?php
    namespace back {

        class Book {
            private $id;
            private $title;
            private $description;
            private $coverUrl;
            private Writer $writer;

            public function fake_construct($title, $description, $coverUrl){
                $this->title = $title;
                $this->description = $description;
                $this->coverUrl = $coverUrl;
            }

            public function __construct(){}

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

            public function getCoverUrl(){
                return $this->coverUrl;
            }     
            
            public function setCoverUrl($url){
                $this->coverUrl = $url;
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