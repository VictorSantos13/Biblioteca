<?php

use back\Book;
use back\BookRepoDatabase;
use back\BookService;
use back\Writer;
use back\WriterRepoDatabase;

    require 'C:\xampp\htdocs\biblioteca\src\repositories\database\book-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\repositories\database\writer-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\services\book-service.php';
    require 'C:\xampp\htdocs\biblioteca\src\services\writer-service.php';

    $bookRepo = new BookRepoDatabase();
    $writerRepo = new WriterRepoDatabase();

    $bookService = new BookService($bookRepo);
    $writerService = new WriterService($writerRepo);

    $writer = $writerService->getWriterByName($_POST['fWriter']);
    echo $writer->getDescription();

    $book = new Book();
    $book->createId();
    $book->fake_construct($_POST['fTitle'], $_POST['fDescription'], $_POST['fWriter']);

    $bookService->createNewBook($book, $writer->getId());  

    header('location: ../index.php');