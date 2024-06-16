<?php

    namespace back {

        interface GenderRepository {
            
            public function save(Gender $gender);

            public function getGenderByName(string $name): Gender | null;

            public function getAllGenders(): array | null;

            public function verifyGender($name);
        }
    }
?>