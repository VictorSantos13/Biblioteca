<?php
    namespace back {

    use mysqli;
    use WriterService;

        class BookService {

            private BookRepository $repo;
            private WriterService $writerService;

            public function __construct(BookRepository $repo){
                $this->repo = $repo;
            }

            public function createNewBook(){
                $book = new Book();
                $book->setTitle('teste');
                $this->repo->save($book);                
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
        }
    }
?>