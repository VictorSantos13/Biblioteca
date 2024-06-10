<?php

use back\Writer;
use back\WriterRepoDatabase;
use back\WriterService;

    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\book-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\writer-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\gender-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\book-service.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\writer-service.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\gender-service.php';

    $writerRepo = new WriterRepoDatabase();
    $writerService = new WriterService($writerRepo);

    $writer = new Writer();
    $writer->fake_construct($_POST['fName'], $_POST['fDescription']);
    $writer->createId();

    $writerService->createNewWriter($writer);

    header('location: ../../index.php');    
?>