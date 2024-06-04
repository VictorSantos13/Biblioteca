<?php

use back\Book;
use back\BookRepoDatabase;
use back\BookService;
use back\GenderRepoDatabase;
use back\GenderService;
use back\Writer;
use back\WriterRepoDatabase;

    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\book-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\writer-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\gender-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\book-service.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\writer-service.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\gender-service.php';

    $bookRepo = new BookRepoDatabase();
    $writerRepo = new WriterRepoDatabase();
    $genderRepo = new GenderRepoDatabase();

    $bookService = new BookService($bookRepo);
    $writerService = new WriterService($writerRepo);
    $genderService = new GenderService($genderRepo);

    $writer = $writerService->getWriterByName($_POST['fWriter']);
    $gender = $genderRepo->getGenderByName($_POST['fGender']);

    $book = new Book();
    $book->createId();
    $book->fake_construct($_POST['fTitle'], $_POST['fDescription']);

    echo $bookService->createNewBook($book, $writer->getId(), $gender->getId());

    header('location: ../../index.php');