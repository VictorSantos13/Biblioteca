<?php

    namespace back{
        require 'C:\xampp\htdocs\Biblioteca\src\repositories\repo.php';

        class WriterRepoDatabase extends Repo implements WriterRepository{

            public function save(){

            }

            public function getWriterById($id)
            {
                $this->query = "select name, description from writer where id = '" . $id . "' ;";
                $result = mysqli_query($this->conn, $this->query);
                return $result;
            }

            public function getWriterByName(){
                $this->query = 'select title, description from book;';
                $result = mysqli_query($this->conn, $this->query);
                return $result;
            }
        }
    }