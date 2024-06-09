<?php

    namespace back {

    use mysqli;

        require 'C:\xampp\htdocs\Biblioteca\src\back\repositories\repo.php';
        require 'C:\xampp\htdocs\Biblioteca\src\back\entities\book.php';
        require 'C:\xampp\htdocs\Biblioteca\src\back\entities\writer.php';

        class BookRepoDatabase extends Repo implements BookRepository {

            public function save(Book $book, $writerId, $genderId) {
                $this->query = "insert into book values ('" . $book->getId() . "', '" . $book->getTitle() . "', 
                '" . $book->getDescription() . "', '" . $book->getCoverUrl() . "', '" . $writerId . "');";
                mysqli_query($this->conn, $this->query);

                $this->bookGenders($book->getId(), $genderId);
            }

            private function bookGenders($bookId, $genderId){
                $this->query = "insert into book_genres values (default, '" . $genderId . "', '" . $bookId . "');";
                mysqli_query($this->conn, $this->query);
            }

            /**
             * @return Book
             */
            public function getBookByTitle(string $title): Book | null{
                $this->query = "select b.title, b.description, b.cover_url, w.name from book b inner join writer w where w.id = b.writer_id
                and b.title = '" . $title . "' ;";
                $result = mysqli_query($this->conn, $this->query);
                
                $book = new Book();
                $writer = new Writer();

                $book->setTitle('false');

                while($row = mysqli_fetch_row($result)){                                        
                    $book->setTitle($row[0]);
                    $book->setDescription($row[1]);
                    $book->setCoverUrl($row[2]);
                    $writer->setName($row[3]);
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
                $this->query = 'select b.title, b.description, b.cover_url, w.name from book b inner join writer w where w.id = b.writer_id;';
                $result = mysqli_query($this->conn, $this->query);
                $array = [];
                $book = new Book();

                $book->setTitle('false');

                while($row = mysqli_fetch_row($result)){
                    $writer = new Writer();
                    $book = new Book();

                    $book->setTitle($row[0]);
                    $book->setDescription($row[1]);
                    $book->setCoverUrl($row[2]);
                    $writer->setName($row[3]);
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