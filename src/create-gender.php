<?php 
 $title = "Create Gender - Biblioteca FMU" ;
require "template/header.php" 
?>

        <div class="container">
            <div class="row justify-content-center">
                <form class="w-50 p-4 bg-light mt-3" id="form" action="./back/routes/create-gender.php" method="post">   
                    <h1>Cadastre um gênero</h1>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome do gênero</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="1984" aria-describedby="emailHelp">
                    </div>   

                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"  style="height: 200px; resize: none;"></textarea>
                        <label for="floatingTextarea2">Escreva uma descrição para o gênero</label>
                    </div>                    

                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>

        <?php require "template/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>