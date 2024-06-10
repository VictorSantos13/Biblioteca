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
                $this->query = "select b.id, b.title, b.description, b.cover_url, w.name, w.description, g.name, g.description
                from book b inner join writer w inner join genre g inner join book_genres bg where w.id = b.writer_id
                and b.title = '" . $title . "' and bg.book_id = b.id and bg.genre_id = g.id;";
                $result = mysqli_query($this->conn, $this->query);
                
                $book = new Book();
                $writer = new Writer();
                $gender = new Gender();

                $book->setTitle('false');

                while($row = mysqli_fetch_row($result)){  
                    $book->setId($row[0]);
                    $book->setTitle($row[1]);
                    $book->setDescription($row[2]);
                    $book->setCoverUrl($row[3]);
                    $writer->setName($row[4]);
                    $writer->setDescription($row[5]);
                    $gender->setName($row[6]);
                    $gender->setDescription($row[7]);
                    $book->setWriter($writer);
                    $book->setGender($gender);
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
                $this->query = 'select b.id, b.title, b.description, b.cover_url, w.name from book b inner join writer w where w.id = b.writer_id;';
                $result = mysqli_query($this->conn, $this->query);
                $array = [];
                $book = new Book();

                $book->setTitle('false');

                while($row = mysqli_fetch_row($result)){
                    $writer = new Writer();
                    $book = new Book();

                    $book->setId($row[0]);
                    $book->setTitle($row[1]);
                    $book->setDescription($row[2]);
                    $book->setCoverUrl($row[3]);
                    $writer->setName($row[4]);
                    $book->setWriter($writer);

                    array_push($array, $book);
                };

                if($book->getTitle() == 'false')
                    return null;
                else
                    return $array;                
            }

            public function editBook(Book $book, $writerId, $genderId){
                $this->query = "update book set title = '" . $book->getTitle() . "', description = '" . $book->getDescription() . "', writer_id = '" . $writerId . "' where id = '" . $book->getId() . "'";

                mysqli_query($this->conn, $this->query);

                $this->query = "update book_genres set genre_id = '" . $genderId . "' where book_id = '" . $book->getId() . "'";
                mysqli_query($this->conn, $this->query);

            }

            public function deleteBook($id){
                $this->query = "delete from book where id = '" . $id . "';";
                mysqli_query($this->conn, $this->query);
            }
        }
    }
?>