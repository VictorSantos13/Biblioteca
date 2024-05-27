<?php

    namespace back {

        interface GenderRepository {
            
            public function save(Gender $gender);

            public function getGenderByName(string $name): Gender | null;

            public function getAllGenders(): array | null; // RETORNAR LISTA DE GÊNEROS (CRIAR DTO)
        }
    }
?>