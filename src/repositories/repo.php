<?php

    namespace back{
        require 'C:\xampp\htdocs\Biblioteca\src\repositories\book-repository.php';
        require 'C:\xampp\htdocs\Biblioteca\vendor\autoload.php';

        use Dotenv\Dotenv;

        class Repo{

            protected $conn;
            protected $query;

            public function __construct(){
                $dotenv = Dotenv::createUnsafeImmutable('../');
                $dotenv->load();

                $this->conn = new \mysqli(getenv('HOSTNAME'), getenv('ENV_USERNAME'), getenv('ENV_PASSWORD'), $_ENV['DATABASE']);
            }
        }
    }