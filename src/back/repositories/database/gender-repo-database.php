<?php

    namespace back {
        use back\Repo;
        use back\GenderRepository;
        require_once 'C:\xampp\htdocs\Biblioteca\src\back\repositories\repo.php';
        require_once 'C:\xampp\htdocs\Biblioteca\src\back\repositories\gender-repository.php';
        require 'C:\xampp\htdocs\Biblioteca\src\back\entities\gender.php';

        class GenderRepoDatabase extends Repo implements GenderRepository {

            public function save(Gender $gender) {
                
            }

            /**
             * @return Gender
             */
            public function getGenderByName(string $title): Gender | null{
                // $this->query = "select title, description from book where title = '" . $title . "' ;";
                // $this->query = "select b.title, b.description, w.name from book b inner join writer w where w.id = b.writer_id
                //     and b.title = '" . $title . "' ;";
                // $result = mysqli_query($this->conn, $this->query);

                
                // $book = new Book();
                // $writer = new Writer();

                // $book->setTitle('false');

                // while($row = mysqli_fetch_row($result)){                                        
                //     $book->setTitle($row[0]);
                //     $book->setDescription($row[1]);
                //     $writer->setName($row[2]);
                //     $book->setWriter($writer);
                // };
                
                // if($book->getTitle() == 'false')
                //     return null;
                // else
                //     return $book;

                return null;
            }   

            /**
             * @return Gender[]
             */
            public function getAllGenders(): array | null {
                $this->query = 'select id, name, description from genre;';
                $result = mysqli_query($this->conn, $this->query);
                $array = [];
                $gender = new Gender();

                $gender->setName('false');

                while($row = mysqli_fetch_row($result)){
                    // $gender = new Book();
                    $gender = new Gender();

                    $gender->setId($row[0]);
                    $gender->setName($row[1]);
                    $gender->setDescription($row[2]);

                    array_push($array, $gender);
                };

                if($gender->getName() == 'false')
                    return null;
                else
                    return $array;                
            }
        }
    }
?>