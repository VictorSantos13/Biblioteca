<?php

    namespace back {
        
        interface UserRepository {
            public function create(User $user);

            public function login($email, $password);
        }
    }