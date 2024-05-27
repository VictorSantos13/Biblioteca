<?php 
  namespace back {
    require 'C:/xampp/htdocs/Biblioteca/vendor/autoload.php';
    require 'C:/xampp/htdocs/Biblioteca/src/back/services/book-service.php';
    require 'C:/xampp/htdocs/Biblioteca/src/back/repositories/database/book-repo-database.php';

    $repo = new BookRepoDatabase();
    $service = new BookService($repo);

    /** @var Book[] */
    $resultAllBooks = $service->getAllBooks();

  }
  
