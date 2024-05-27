<?php

    namespace back{
        require_once 'C:\xampp\htdocs\Biblioteca\src\back\repositories\repo.php';
        require_once 'C:\xampp\htdocs\Biblioteca\src\back\repositories\writer-repository.php';
        require_once 'C:\xampp\htdocs\Biblioteca\src\back\entities\book.php';
        require_once 'C:\xampp\htdocs\Biblioteca\src\back\entities\writer.php';

        class WriterRepoDatabase extends Repo implements WriterRepository{

            public function save(){

            }

            public function getAllWriters(){
                $this->query = "select id, name, description from writer;";
                $result = mysqli_query($this->conn, $this->query);

                $array = [];
                $writer = new Writer();

                $writer->setName('false');

                while($row = mysqli_fetch_row($result)){
                    $writer = new Writer();

                    $writer->setId($row[0]);
                    $writer->setName($row[1]);
                    $writer->setDescription($row[2]);

                    array_push($array, $writer);
                };

                if($writer->getName() == 'false')
                    return null;
                else
                    return $array;  
                return $result;
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