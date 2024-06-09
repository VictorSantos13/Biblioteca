<?php

use back\UserRepoDatabase;
use back\UserService;

    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\user-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\user-service.php';

    $userRepo = new UserRepoDatabase();
    $userService = new UserService($userRepo);

    $name = $userService->login($_POST["fName"], $_POST["fPassword"]);

    // echo hash("sha256", $_POST["fPassword"]);

    if($name){
        echo 'bem vindo troxa';
        session_start();
        $_SESSION["newsession"] = $name;

        header("location: ../../index.php");
    }
    else {
        echo 'sem conta seu otário';
    }

    // session_start();
    // unset($_SESSION["newsession"]);
    // session_destroy();

    // header("location: ../../index.php")

?>