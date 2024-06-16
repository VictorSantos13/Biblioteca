<?php 
  $title = "Login - Biblioteca FMU" ;
  require "template/header.php";  
  
?>

        <div class="container">
            <div class="row justify-content-center">
                <form class="w-50 p-4 mt-5 mb-5 bg-light" action="./back/routes/login.php" method="post">
                    <h1>Faça log-in</h1>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="fName" class="form-control" id="exampleInputEmail1" placeholder="joaodasilva@gmail.com" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" class="form-control" name="fPassword" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    <div class="text mt-3">Ainda não tem uma conta? <a href="./sing-in.php">Clique aqui</a></div>                
                </form>
            </div>
        </div>

        <?php require "template/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
    <script src="./assets/js/validation.js"></script>
</body>
</html>