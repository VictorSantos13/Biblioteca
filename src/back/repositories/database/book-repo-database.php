<?php

    namespace back {
        require 'C:\xampp\htdocs\Biblioteca\src\back\repositories\repo.php';
        require 'C:\xampp\htdocs\Biblioteca\src\back\entities\book.php';
        require 'C:\xampp\htdocs\Biblioteca\src\back\entities\writer.php';

        class BookRepoDatabase extends Repo implements BookRepository {

            public function save(Book $book, $writerId) {
                $this->query = "insert into book values ('" . $book->getId() . "', '" . $book->getTitle() . "', 
                '" . $book->getDescription() . "', '" . $writerId . "')";
                mysqli_query($this->conn, $this->query);
            }

            /**
             * @return Book
             */
            public function getBookByTitle(string $title): Book | null{
                $this->query = "select b.title, b.description, w.name from book b inner join writer w where w.id = b.writer_id
                and b.title = '" . $title . "' ;";
                $result = mysqli_query($this->conn, $this->query);
                
                $book = new Book();
                $writer = new Writer();

                $book->setTitle('false');

                while($row = mysqli_fetch_row($result)){                                        
                    $book->setTitle($row[0]);
                    $book->setDescription($row[1]);
                    $writer->setName($row[2]);
                    $book->setWriter($writer);
                };
                
                if($book->getTitle() == 'false')
                    return null;
                else
                    return $book;
            }   

            /**
             * @return Book[]
             */
            public function getAllBooks(): array | null {
                $this->query = 'select b.title, b.description, w.name from book b inner join writer w where w.id = b.writer_id;';
                $result = mysqli_query($this->conn, $this->query);
                $array = [];
                $book = new Book();

                $book->setTitle('false');

                while($row = mysqli_fetch_row($result)){
                    // $book = new Book();
                    $writer = new Writer();

                    $book->setTitle($row[0]);
                    $book->setDescription($row[1]);
                    $writer->setName($row[2]);
                    $book->setWriter($writer);

                    array_push($array, $book);
                };

                if($book->getTitle() == 'false')
                    return null;
                else
                    return $array;                
            }
        }
    }
?>