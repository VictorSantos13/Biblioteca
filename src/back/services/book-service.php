<?php
    namespace back {

    use mysqli;
    use WriterService;

        class BookService {

            private BookRepository $repo;

            public function __construct(BookRepository $repo){
                $this->repo = $repo;
            }

            public function createNewBook(Book $book, $writerId, $genderId){
                return $this->repo->save($book, $writerId, $genderId);                
            }

            public function getBookByTitle($title){
                /** @var Book **/
                $result = $this->repo->getBookByTitle($title);
                return $result;
            }

            public function getAllBooks(){
                /** @var Book[] **/
                $result = $this->repo->getAllBooks();
                return $result;
            }

            public function test(){
                return 10;
            }
        }
    }
?>