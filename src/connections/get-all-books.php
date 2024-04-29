<?php 
  namespace back {
    require '../../vendor/autoload.php';
    require '../services/book-service.php';
    require '../repositories/database/book-repo-database.php';

    $repo = new BookRepoDatabase();
    $service = new BookService($repo);

    /** @var Book[] */
    $result = $service->getAllBooks();

    $i = 0;
  
    if(!$result)
        echo 'nenhum livro encontrado';
    else {
      foreach($result as $row) {
        echo '<b>livro ' . $i . '<br></b>' ;
        echo $row->getTitle() . '<br>';
        echo $row->getDescription() . '<br>';
        echo $row->getWriter()->getName() . '<br><br>';  
        $i++;
      }
    }
  }
  
