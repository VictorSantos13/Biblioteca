<?php
    namespace back {

    use mysqli;
    use WriterService;

        class UserService {

            private UserRepository $repo;

            public function __construct(UserRepository $repo){
                $this->repo = $repo;
            }

            public function createNewUser(User $user){
                return $this->repo->create($user);                
            }

            public function login($email, $password){
                $result = $this->repo->login($email, $password);
                return $result;
            }
        }
    }
?>