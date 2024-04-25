<?php

    namespace back {

        interface bookRepository {
            public function save($name, $description);

            public function getAllBooks(): \mysqli_result | bool; // RETORNAR LISTA DE LIVROS (CRIAR DTO)
        }

    }
?>