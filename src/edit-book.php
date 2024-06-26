<?php
    require './back/routes/get-all-writers.php';
    require './back/routes/get-all-genders.php';
    require 'C:\xampp\htdocs\Biblioteca\src\back\routes\get-book-by-title.php';
    $title = "Edit Book - Biblioteca FMU" ;
    require "template/header.php";  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Biblioteca</title>
</head>
<body>
    <main class="main">
        <!--HEADER-->
        <nav class="navbar navbar-expand-lg fixed-top primary-color">
            <div class="container-fluid">
                <img src="assets/images/Logo.png" class="navbar-brand" href="./index.html"><!--<a class="navbar-brand" href="./index.html">Biblioteca FMU</a>-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" aria-current="page" href="./index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="./about-us.html">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="login.html">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="sing-in.html">Cadastre-se</a>
                </li>
                </ul>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            </div>
        </nav>
        <div class="space"></div>
        <!--END HEADER-->

        <div class="container">
            <div class="row justify-content-center">
                <form class="w-50 p-4 bg-light mt-3" id="form" action="./back/routes/edit-book.php?id=<?php echo $resultBook->getId() ?>" method="post" enctype="multipart/form-data">
                    <h1>Edite o livro</h1>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Título</label>
                        <input type="text" class="form-control" value='<?php echo $resultBook->getTitle() ?>' name="fTitle" id="fTitle" placeholder="1984" aria-describedby="emailHelp">
                    </div>   

                    <div class="form-floating mb-3">
                        <textarea class="form-control" value="hm" name="fDescription" id="floatingTextarea2"  style="height: 200px; resize: none;"><?php echo $resultBook->getDescription() ?></textarea>
                        <label for="floatingTextarea2">Escreva uma descrição do livro</label>
                    </div>

                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Gênero <a href="./create-gender.php">Criar um novo gênero</a></label>
                        <select id="disabledSelect" name="fGender" class="form-select">

                            <?php if($resultAllGenders != null){ ?>

                                <option><?php echo $resultBook->getGender()->getName() ?></option>                                                                
                                <?php foreach($resultAllGenders as $row){ ?>
                                    <option><?php echo $row->getName()?></option>
                                <?php } ?>

                            <?php } else { ?>
                                <option>Ainda não há gênero</option> 
                            <?php }?>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Escritor <a href="./create-writer.php">Criar um novo escritor</a></label>
                        <select id="disabledSelect" name="fWriter" class="form-select">
                            
                            <?php if($resultAllWriters != null){ ?>

                                <option><?php echo $resultBook->getWriter()->getName() ?></option>                                
                                <?php foreach($resultAllWriters as $row){ ?>
                                    <option><?php echo $row->getName()?></option>
                                <?php } ?>

                            <?php } else { ?>
                                <option>Ainda não há escritores</option> 
                            <?php }?>

                        </select>
                    </div><div class="mb-3 myPointer">
                        <input type="file" accept="image" name="cover" id="inputGroupFile01">                    
                        <label style="display: block;" for="inputGroupFile01">
                            <img style="display: block; border-radius: 5px;" src="https://biblioteca-fmu.s3.amazonaws.com/<?php echo $resultBook->getCoverUrl() ?>" id="photo-preview-show">
                        </label>
                    </div>                    

                    <button type="submit" id="submit" class="btn btn-primary">Salvar</button>

                    <a href="./back/routes/delete-book.php?id=<?php echo $resultBook->getId() ?>">
                        <button type="button" id="submit" class="btn btn-danger">Deletar</button>
                    </a>

        <!-- 
        <div class="container mt-5">
            <div class="row">
                <div class="col-6">
                    <p class="text-justify">
                        O que dá direção e significado ao nosso trabalho?
                        Disponibilizar um acervo de títulos completo, com equipe de colaboradores competente e treinada, orientada a fazer do momento da compra uma experiência única de descoberta e prazer.
                    </p>
                </div> 

                <div class="col-6">
                    <p class="text-justify">
                        Acreditamos no poder transformador da informação e da cultura.
                        Nosso objetivo é ser a melhor loja de entretenimento e informação, nos consolidando como a grande referência do setor.
                        Quanto mais crescermos, mais vamos disseminar essa informação, ajudando as pessoas a construir e viver em um mundo melhor e mais justo.
                    </p>
                </div> 
            </div>                         
        </div>
        -->
    </main>

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

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
    <script src="./assets/js/image-preview.js"></script>
    <script src="./assets/js/validation.js"></script>
</body>
</html> 