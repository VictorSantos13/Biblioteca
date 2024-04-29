<?php 
  namespace back {
    require 'C:\xampp\htdocs\Biblioteca\vendor\autoload.php';
    require 'C:\xampp\htdocs\Biblioteca\src\services\book-service.php';
    require 'C:\xampp\htdocs\Biblioteca\src\repositories\database\book-repo-database.php';    

    $repo = new BookRepoDatabase();
    $service = new BookService($repo);

    /** @var Book **/
    $result = $service->getBookByTitle($_GET['title']);
  
    if(!$result)
        echo 'nenhum livro encontrado';
    else
    {
        echo $result->getTitle() . '<br>';
        echo $result->getDescription() . '<br>';        
        echo $result->getWriter()->getName() . '<br>';  
    }
  }
  
