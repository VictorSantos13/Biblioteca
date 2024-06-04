<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title><?php echo $title ?></title>
</head>
<body>
    <main class="main">
        <nav class="navbar navbar-expand-lg fixed-top primary-color">
            <div class="container-fluid">
                <a href="index.php"><img src="assets/images/Logo.png" class="navbar-brand"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="./about-us.php">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="sing-in.php">Cadastre-se</a>
                        </li>
                    </ul>                
                    
                    <a class="nav-link active text-white" aria-current="page" href="./login.php">Entrar</a>
                </div>
            </div>
        </nav>
        <div class="space"></div>