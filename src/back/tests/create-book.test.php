<?php

    namespace Tests;
        use back\Book;
        use back\BookRepoDatabase;
        use back\BookRepoInMemory;
        use back\BookService;
        use back\Writer;
        use back\WriterRepoDatabase;

        require 'C:\xampp\htdocs\biblioteca\src\back\repositories\in-memory\book-repo-in-memory.php';
        // require 'C:\xampp\htdocs\biblioteca\src\repositories\database\writer-repo-database.php';
        require 'C:\xampp\htdocs\biblioteca\src\back\services\book-service.php';
        // require 'C:\xampp\htdocs\biblioteca\src\services\writer-service.php';

        use PHPUnit\Framework\TestCase;

        class Test extends TestCase
        {
            public function test()
            {
                $bookRepo = new BookRepoInMemory();
                // $writerRepo = new WriterRepoDatabase();

                $bookService = new BookService($bookRepo);
                // $writerService = new WriterService($writerRepo);

                $this->assertTrue(true);
            }
        
    }