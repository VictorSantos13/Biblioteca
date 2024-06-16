<?php

    namespace back {
        use back\Repo;
        use back\GenderRepository;
        require_once 'C:\xampp\htdocs\Biblioteca\src\back\repositories\repo.php';
        require_once 'C:\xampp\htdocs\Biblioteca\src\back\repositories\gender-repository.php';
        require 'C:\xampp\htdocs\Biblioteca\src\back\entities\gender.php';

        class GenderRepoDatabase extends Repo implements GenderRepository {

            public function save(Gender $gender) {
                $this->query = "insert into genre values ('" . $gender->getId() . "', '" . $gender->getName() . "', 
                '" . $gender->getDescription() . "');";
                mysqli_query($this->conn, $this->query);
            }

            /**
             * @return Gender
             */
            public function getGenderByName(string $name): Gender | null{
                $this->query = "select * from genre where name = '" . $name . "' ;";
                $result = mysqli_query($this->conn, $this->query);
                
                $gender = new Gender();

                $gender->setName('false');

                while($row = mysqli_fetch_row($result)){                                        
                    $gender->setId($row[0]);
                    $gender->setName($row[1]);
                    $gender->setDescription($row[2]);
                };
                
                if($gender->getName() == 'false')
                    return null;
                else
                    return $gender;

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

            public function verifyGender($name)
            {
                $this->query = "select name from genre where name = '" . $name . "';";
                $result = mysqli_query($this->conn, $this->query);

                $row = mysqli_fetch_row($result);

                return $row;
            }
        }
    }
?>