<?php

namespace back {
    use back\WriterRepoDatabase;
    use back\WriterService;
    // use WriterService;

    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\book-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\writer-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\book-service.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\writer-service.php';

    $repo = new WriterRepoDatabase;
    $service = new WriterService($repo);

    /** @var Writer[] */
    $resultAllWriters = $service->getAllWriters();

    // header('location: ../../index.php');
}