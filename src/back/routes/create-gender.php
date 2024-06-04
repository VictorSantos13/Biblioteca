<?php

use back\Gender;
use back\GenderRepoDatabase;
use back\GenderService;

    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\book-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\writer-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\gender-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\book-service.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\writer-service.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\gender-service.php';

    $genderRepo = new GenderRepoDatabase();
    $genderService = new GenderService($genderRepo);

    $gender = new Gender();
    $gender->fake_construct($_POST['fName'], $_POST['fDescription']);
    $gender->createId();

    $genderService->createNewGender($gender);

    header('location: ../../index.php');    
?>