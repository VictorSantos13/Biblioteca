<?php

    namespace back {

        interface BookRepository {
            public function save(Book $book);

            public function getBookByTitle(string $title): Book | null;

            public function getAllBooks(): array | null; // RETORNAR LISTA DE LIVROS (CRIAR DTO)
        }
    }
?>