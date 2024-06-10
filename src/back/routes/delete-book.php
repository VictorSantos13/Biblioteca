<?php

use back\Book;
use back\BookRepoDatabase;
use back\BookService;
use back\GenderRepoDatabase;
use back\GenderService;
use back\WriterService;
use back\WriterRepoDatabase;

    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\book-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\writer-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\gender-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\book-service.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\writer-service.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\gender-service.php';
    require 'C:\xampp\htdocs\Biblioteca\src\back\connections\delete-s3.php';

    $bookRepo = new BookRepoDatabase();
    $bookService = new BookService($bookRepo);

    $bookService->deleteBook($_GET['id']);

    header('location: ../../index.php');
