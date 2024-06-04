<?php
    require './back/routes/get-all-writers.php';
    require './back/routes/get-all-genders.php';
    $title = "Create Book - Biblioteca FMU" ;
  require "template/header.php";
?>


        <div class="container">
            <div class="row justify-content-center">
                <form class="w-50 p-4 bg-light mt-3" id="form" action="./back/routes/create-book.php" method="post">
                    <h1>Cadastre um novo livro</h1>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Título</label>
                        <input type="text" class="form-control" name="fTitle" id="fTitle" placeholder="1984" aria-describedby="emailHelp">
                    </div>   

                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" name="fDescription" id="floatingTextarea2"  style="height: 200px; resize: none;"></textarea>
                        <label for="floatingTextarea2">Escreva uma descrição do livro</label>
                    </div>

                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Gênero <a href="./create-gender.php">Criar um novo gênero</a></label>
                        <select id="disabledSelect" name="fGender" class="form-select">

                            <?php if($resultAllGenders != null){ ?>

                                <option>Selecione um gênero</option>                                
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

                                <option>Selecione um escritor</option>                                
                                <?php foreach($resultAllWriters as $row){ ?>
                                    <option><?php echo $row->getName()?></option>
                                <?php } ?>

                            <?php } else { ?>
                                <option>Ainda não há escritores</option> 
                            <?php }?>

                        </select>
                    </div>

                    <div class="mb-3 myPointer">
                        <input type="file" accept="image" id="inputGroupFile01">                    
                        <label for="inputGroupFile01" id="photo-preview-input">+</label>
                        <label for="inputGroupFile01">
                            <img src="#" id="photo-preview-show">
                        </label>
                    </div>                    

                    <button type="submit" id="submit" class="btn btn-primary">Salvar</button>
                </form>                
            </div>            
        </div>

        <?php require "template/footer.php" ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
    <script src="./assets/js/image-preview.js"></script>
    <script src="./assets/js/validation.js"></script>
</body>
</html>