<?php 
  namespace back {

    require_once 'C:\xampp\htdocs\Biblioteca\vendor\autoload.php';
    require_once 'C:\xampp\htdocs\Biblioteca\src\back\services\book-service.php';
    require_once 'C:\xampp\htdocs\Biblioteca\src\back\repositories\database\book-repo-database.php';    

    $repo = new BookRepoDatabase();
    $service = new BookService($repo);

    /** @var Book **/
    $resultBook = $service->getBookByTitle($_GET['title']);
  
    // if(!$resultBook)
    //     echo 'nenhum livro encontrado';
    // else
    // {
    //     echo $resultBook->getTitle() . '<br>';
    //     echo $resultBook->getDescription() . '<br>';        
    //     echo $resultBook->getWriter()->getName() . '<br>';  
    // }
  }
  
