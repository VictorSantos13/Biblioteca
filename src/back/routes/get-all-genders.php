<?php 
  namespace back {
    use back\GenderRepoDatabase;
    use back\GenderService;

    require_once 'C:/xampp/htdocs/Biblioteca/vendor/autoload.php';
    require_once 'C:/xampp/htdocs/Biblioteca/src/back/services/gender-service.php';
    require_once 'C:/xampp/htdocs/Biblioteca/src/back/repositories/database/gender-repo-database.php';

    $repo = new GenderRepoDatabase();
    $service = new GenderService($repo);

    /** @var Gender[] */
    $resultAllGenders = $service->getAllGenders();

  }
  
