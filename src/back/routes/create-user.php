<?php

session_start();

use back\User;
use back\UserRepoDatabase;
use back\UserService;

    require 'C:\xampp\htdocs\biblioteca\src\back\repositories\database\user-repo-database.php';
    require 'C:\xampp\htdocs\biblioteca\src\back\services\user-service.php';

    $userRepo = new UserRepoDatabase();
    $userService = new UserService($userRepo);

    if($userService->verifyEmail($_POST['fEmail'])){
        header('location: ../../sing-in.php');
    }
    else{
        $user = new User();
        $user->fake_construct($_POST['fName'], $_POST['fEmail'], $_POST['fPassword']);
        $user->createId();
    
        $user->hashPassword();
        echo $user->getPassword();
    
        $userService->createNewUser($user);
    
        $_SESSION["newsession"] = $user->getName();
    
        header('location: ../../index.php');
    }    
?>