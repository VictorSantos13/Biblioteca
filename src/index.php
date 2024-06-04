<?php 
  require "./back/routes/get-all-books.php";
  $title = "Biblioteca FMU" ;
  require "template/header.php";  
  
?>

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
                        <img src="./assets/images/img-livro-01.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row->getTitle() ?></h5>
                          <p class="card-text"><?php echo $row->getDescription() ?></p>
                          <button type="button" class="btn btn-primary">Editar</button>
                          <button type="button" class="btn btn-primary">Ver mais</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <?php

              }
              }
            ?>
            
                

            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 d-flex justify-content-center">
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
            </div>

            
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

        <?php require "template/footer.php" ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>
