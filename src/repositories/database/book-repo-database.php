<?php

    namespace back {
        require '../../../vendor/autolod.php';
        use Dotenv\Dotenv;


        class bookRepoDatabase implements bookRepository {

            private $conn;
            private $query;

            public function __construct(){
                $dotenv = Dotenv::createUnsafeImmutable('../../');
                $dotenv->load();

                $this->conn = new \mysqli(getenv('HOSTNAME'), getenv('ENV_USERNAME'), getenv('ENV_PASSWORD'), $_ENV['DATABASE']);
            }

            public function save($name, $description) {
                
            }

            public function getAllBooks(): \mysqli_result | bool{
                $this->query = 'select title, description from book;';
                $result = mysqli_query($this->conn, $this->query);
                return $result;
            }
        }

    }
?>