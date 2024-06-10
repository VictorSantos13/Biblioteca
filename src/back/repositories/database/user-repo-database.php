<?php

    namespace back{
        require_once 'C:\xampp\htdocs\Biblioteca\src\back\repositories\repo.php';
        require_once 'C:\xampp\htdocs\Biblioteca\src\back\repositories\user-repository.php';
        require_once 'C:\xampp\htdocs\Biblioteca\src\back\entities\user.php';

        class UserRepoDatabase extends Repo implements UserRepository{

            public function create(User $user) {
                // $user->hashPassword();
                $passwordHashed = hash("sha256", $user->getPassword());
                $user->createId();
                $this->query = "insert into users values ('" . $user->getId() . "', '" . $user->getName() . "', 
                '" . $user->getEmail() . "', '" . $user->getPassword() . "', 0);";
                mysqli_query($this->conn, $this->query);
            }

            public function login($email, $password){

                $passwordHashed = hash("sha256", $password);

                $this->query = "select name from users where e_mail = '" . $email . "' and pass_word = '" . $passwordHashed . "';";
                $result = mysqli_query($this->conn, $this->query);

                $user = new User();

                $user->setName('false');

                while($row = mysqli_fetch_row($result)){
                    $user->setName($row[0]);
                };

                if($user->getName() == 'false')
                    return null;
                else
                    return $user->getName();  

            }
        }
    }