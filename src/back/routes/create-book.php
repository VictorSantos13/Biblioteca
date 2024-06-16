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

    $bookRepo = new BookRepoDatabase();
    $writerRepo = new WriterRepoDatabase();
    $genderRepo = new GenderRepoDatabase();

    $bookService = new BookService($bookRepo);
    $writerService = new WriterService($writerRepo);
    $genderService = new GenderService($genderRepo);

    if($bookService->verifyTitle($_POST['fTitle'])){
        header('location: ../../create-book.php');        
    }else{

        if ($_POST['fGender'] == 'Selecione um gênero' || $_POST['fWriter'] == 'Selecione um escritor'){
            header('location: ../../create-book.php');
        }
        else {
            $writer = $writerService->getWriterByName($_POST['fWriter']);
            $gender = $genderRepo->getGenderByName($_POST['fGender']);
    
            $book = new Book();
            $book->createId();
            $_POST['id'] = $book->getId();
            $book->fake_construct($_POST['fTitle'], $_POST['fDescription'], $book->getId() . ".jpg");
    
            $image = $_FILES["cover"];
    
            $bookService->createNewBook($book, $writer->getId(), $gender->getId());
    
            require 'C:\xampp\htdocs\Biblioteca\src\back\connections\upload-s3.php';
            header('location: ../../index.php');
        }

    }

    