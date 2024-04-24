<?php 
  require '../../vendor/autoload.php';

  use Dotenv\Dotenv;

  $dotenv = Dotenv::createUnsafeImmutable('../../');
  $dotenv->load();

  $conn = new mysqli(getenv('HOSTNAME'), getenv('ENV_USERNAME'), getenv('ENV_PASSWORD'), $_ENV['DATABASE']);
  $query = 'select title, description from book;';
  $result = mysqli_query($conn, $query);

  foreach($result as $row) {
    echo $row['title'] . '<br>';
}
