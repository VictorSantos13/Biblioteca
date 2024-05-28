<?php

use back\Book;
use back\BookRepoDatabase;
use back\BookService;
use back\Writer;
use back\WriterRepoDatabase;

    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\book-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\writer-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\book-service.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\writer-service.php';

    $bookRepo = new BookRepoDatabase();
    $writerRepo = new WriterRepoDatabase();

    $bookService = new BookService($bookRepo);
    $writerService = new WriterService($writerRepo);

    $writer = $writerService->getWriterByName($_POST['fWriter']);
    echo $writer->getId();

    $book = new Book();
    $book->createId();
    $book->fake_construct($_POST['fTitle'], $_POST['fDescription']);

    echo $_POST['fTitle']; echo '<br>';
    echo $_POST['fDescription']; echo '<br>';
    // echo $_POST['fWriter']; 

    echo $bookService->createNewBook($book, $writer->getId());  

    // header('location: ../../index.php');