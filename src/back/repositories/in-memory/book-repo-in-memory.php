<?php

    namespace back {
        require 'C:\xampp\htdocs\Biblioteca\src\back\repositories\repo.php';
        require 'C:\xampp\htdocs\Biblioteca\src\back\entities\book.php';
        require 'C:\xampp\htdocs\Biblioteca\src\back\entities\writer.php';

        class BookRepoInMemory implements BookRepository {

            /**
             * @var Book[]
             */
            private Book $inMemoryDatabase;

            public function save(Book $book) {
                array_push($this->inMemoryDatabase, $book);
            }

            /**
             * @return Book
             */
            public function getBookByTitle(string $title): Book | null{

                foreach($this->inMemoryDatabase as $row){
                    if($row->getTitle() == $title)
                    return $row;
                }

                return null;
            }   

            /**
             * @return Book[]
             */
            public function getAllBooks(): array | null {

                return $this->inMemoryDatabase;            
            }

            
        }
    }
?>