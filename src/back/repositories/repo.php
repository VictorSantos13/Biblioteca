<?php

    namespace back{
        use back\Book;
        require_once 'C:/xampp/htdocs/Biblioteca/src/back/repositories/book-repository.php';
        require_once 'C:\xampp\htdocs\Biblioteca\vendor\autoload.php';

        use Dotenv\Dotenv;

        class Repo{

            protected $conn;
            protected $query;

            public function __construct(){
                $dotenv = Dotenv::createUnsafeImmutable('C:\xampp\htdocs\Biblioteca');
                $dotenv->load();

                $this->conn = new \mysqli(getenv('HOSTNAME'), getenv('ENV_USERNAME'), getenv('ENV_PASSWORD'), $_ENV['DATABASE']);
            }
        }
    }