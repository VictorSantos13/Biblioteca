<?php 
  session_start();
  require "./back/routes/get-all-books.php"      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" co  ntent="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Biblioteca</title>
</head>
<body>
    <main class="main">
      <!--HEADER-->
        <nav class="navbar navbar-expand-lg fixed-top primary-color"><!--bg-body-tertiary-->
          <div class="container-fluid">
            <img src="assets/images/Logo.png" class="navbar-brand" href="./index.html"><!--<a class="navbar-brand" href="./index.html">Biblioteca FMU</a>-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active text-white" aria-current="page" href="./index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="./about-us.html">Sobre nós</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="login.html">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="sing-in.html">Cadastre-se</a>
                </li>
              </ul>                
              
              <?php if(!isset($_SESSION["newsession"])) { ?>
                <a class="nav-link active text-white" aria-current="page" href="./login.php">Entrar</a>
              <?php } else { ?>
                <a class="nav-link active text-white" aria-current="page"><?php echo $_SESSION["newsession"] ?></a>
                <a class="nav-link active text-white" aria-current="page" href="./back/routes/logout.php"> - sair</a>
              <?php } ?>

            </div>
          </div>
        </nav>
        <div class="space"></div>
        <!--END HEADER-->

        <!--CAROUSEL-->
        <div id="carouselExampleAutoplaying" class="carousel slide mb-2" style="height: 20rem;" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/images/slide1.jpg" class="d-block w-100" style="height: 20rem; background-size: cover;" alt="slide 1">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="h1-carousel">Conheça Nossa Biblioteca</h1>
                <a class="btn-carousel primary-color" href="./about-us.html">Saiba Mais</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="./assets/images/slide1.jpg" class="d-block w-100" style="height: 20rem; background-size: cover;" alt="slide 2">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="h1-carousel">Nossos Livors</h1>
                <a class="btn-carousel primary-color" href="#livros">Saiba Mais</a>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <!--END CAROUSEL-->

        <div class="container">
          <div class="row mt-5 mb-3">
            <div class="col-12">
                    <h1 class="divisor text-center" id="livros">Livros</h1>
            </div>
          </div>

            <!--1 ROW-->            
            <div class="row mt-5">        
            
            <?php
              if(!$resultAllBooks)
              echo 'nenhum livro encontrado';
              else {
              foreach($resultAllBooks as $row) { ?>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 d-flex justify-content-center">
                  <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4 d-flex justify-content-center">
                        <img src="https://biblioteca-fmu.s3.us-east-1.amazonaws.com/<?php echo $row->getCoverUrl() ?>"
                        class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row->getTitle() ?></h5>
                          <p class="card-text"><?php echo $row->getDescription() ?></p>

                          <?php if(isset($_SESSION["newsession"])) { ?>
                            <a href="edit-book.php?title=<?php echo $row->getTitle() ?>">
                              <button type="button" class="btn btn-primary">Editar</button>
                            </a>
                          <?php } else { ?>
                            <a href="edit-book.php?title=<?php echo $row->getTitle() ?>">
                              <button type="button" class="btn btn-primary">Ver mais</button>
                            </a>
                          <?php } ?>

                        </div>
                      </div>
                    </div>
                  </div>
                </div> <?php

              }
              }
            ?>
            
                

            <!--<div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 d-flex justify-content-center">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4 d-flex justify-content-center">
                    <img src="./assets/images/img-livro-02.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Diário de Anne Frank</h5>
                      <p class="card-text">O Diário de Anne Frank é um livro escrito por Anne Frank entre 12 de junho de 1942 e 1.º de agosto de 1944 durante a Segunda Guerra Mundial.</p>
                      <button type="button" class="btn btn-primary">Editar</button>
                      <button type="button" class="btn btn-primary">Ver mais</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 d-flex justify-content-center">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4 d-flex justify-content-center">
                    <img src="./assets/images/img-livro-03.webp" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">É Assim que Acaba</h5>
                      <p class="card-text">É assim que acaba é o romance mais pessoal da carreira de Colleen Hoover, discutindo temas como violência doméstica e abuso psicológico de forma sensível e direta. </p>
                      <button type="button" class="btn btn-primary">Editar</button>
                      <button type="button" class="btn btn-primary">Ver mais</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>-->
            
        </div>

            

        <!--LOCALIZAÇÂO-->
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-12">
                        <h1 class="divisor text-center">Localização</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914.3050526312419!2d-46.63860103645907!3d-23.560533320202257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59aa5c30eedf%3A0x3ab50648e11f6a9c!2sFMU%20%7C%20FIAM-FAAM%20-%20Campus%20Liberdade!5e0!3m2!1spt-BR!2sbr!4v1711461974800!5m2!1spt-BR!2sbr" 
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>                

        <!--FOOTER-->
        <div class="container-fluid mt-3 primary-color" style="padding-top: 30px; padding-bottom: 50px;"><!--bg-light-->
          <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center" style="margin:auto 0">
              <img src="assets/images/Logo.png" class="navbar-brand" href="./index.html">
            </div>
            
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4  text-center">
              <div class="footer-responsive">
                <h2 class="text-white">Contato</h2>
                <h4 class="text-white">biblioteca@fmu.edu.br</h4>
                <h4 class="text-white">(11) 91234-5678</h4>
              </div>  
            </div>
            
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4  text-center">
              <h2 class="text-white">Redes</h2>
              <a href="https://www.instagram.com/" target="_blank"><img src="./assets/svg/instagram.svg" width="50px"/></a>
              <a href="https://www.facebook.com/" target="_blank"><img src="./assets/svg/facebook.svg" width="50" style="margin: 0 5px;"/></a>
              <a href="https://twitter.com/" target="_blank"><img src="./assets/svg/twitter.svg" width="50"/></a>                      
            </div>
          </div>                  
        </div>
                <!--END FOOTER-->

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>
