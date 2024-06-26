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
                <img src="assets/images/Logo.png" class="navbar-brand" href="./index.html">
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

        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="divisor text-center mt-3 mb-5">Sobre nós</h1>
                </div>
            </div>
            

            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <p class="text-justify">
                        A Biblioteca da FMU é um espaço que reflete a busca pelo conhecimento e o incentivo à pesquisa e ao aprendizado de qualidade. Com uma história marcada pela dedicação à educação, a biblioteca foi fundada para ser um ambiente acolhedor, proporcionando acesso a uma vasta gama de materiais de estudo. Desde o seu início, a biblioteca da FMU tem sido um pilar para estudantes, professores e pesquisadores, oferecendo um acervo diverso com livros, periódicos, revistas acadêmicas e recursos digitais. Localizada estrategicamente no campus da FMU, a biblioteca é uma fonte essencial de conhecimento, além de ser um espaço de interação e troca de ideias. O ambiente conta com áreas de estudo individual e coletivo, salas para apresentações e workshops, além de eventos culturais e palestras que enriquecem a experiência acadêmica.
                    </p>
                </div> 

                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="d-flex justify-content-center">
                        <img id="img-width" src="https://revista-cdn.querobolsa.com.br/post_images/5100/ef349eba5c731df0412a6275706fafd5bc186c49.png?1510068495" style="max-width: 500px;"
                        class="rounded">
                    </div>
                </div> 
            </div>           
                          
        </div>

        <!--
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="divisor text-center mt-3 mb-5">Horário de atendimento</h1>
                </div>
            </div>            

            <div class="row">
                <div class="col-2">
                    <p class="font-italic" style="font-weight: bold;">Segunda-feira</p>                    
                </div> 

                <div class="col-2">
                    <p class="text-justify" style="font-weight: bold;">Terça-feira</p>
                </div>
                
                <div class="col-2">
                    <p class="text-justify" style="font-weight: bold;">Quarta-feira</p>
                </div> 

                <div class="col-2">
                    <p class="text-justify" style="font-weight: bold;">Quinta-feira</p>
                </div> 

                <div class="col-2">
                    <p class="text-justify" style="font-weight: bold;">Sexta-feira</p>
                </div>

                <div class="col-2">
                    <p class="text-justify" style="font-weight: bold;">Sábado</p>
                </div> 
            </div>     
            
            
            <div class="row">
                <div class="col-2">
                    <p class="text-justify">8h00 às 19h00</p>                    
                </div> 

                <div class="col-2">
                    <p class="text-justify">8h00 às 19h00</p>
                </div>
                
                <div class="col-2">
                    <p class="text-justify">8h00 às 19h00a</p>
                </div> 

                <div class="col-2">
                    <p class="text-justify">8h00 às 19h00</p>
                </div> 

                <div class="col-2">
                    <p class="text-justify">8h00 às 19h00</p>
                </div>

                <div class="col-2">
                    <p class="text-justify">8h00 às 14h00</p>
                </div> 
            </div>      
        </div>-->

        <!--TABELA DESKTOP-->
        <div class="container mt-5 mb-5 container-desktop">
            <div class="row">
                <div class="col-12">
                    <h1 class="divisor text-center mt-3 mb-5">Horário de atendimento</h1>
                </div>
            </div>
            <table class="table table-bordered">
                <thead id="thead-dark">
                    <tr>
                        <th class="text-center" scope="col">Segunda-feira</th>
                        <th class="text-center" scope="col">Terça-feira</th>
                        <th class="text-center" scope="col">Quarta-feira</th>
                        <th class="text-center" scope="col">Quinta-feira</th>
                        <th class="text-center" scope="col">Sexta-feira</th>
                        <th class="text-center" scope="col">Sábado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">8h00 às 19h00</th>
                        <td class="text-center">8h00 às 19h00</td>
                        <td class="text-center">8h00 às 19h00</td>
                        <td class="text-center">8h00 às 19h00</td>
                        <td class="text-center">8h00 às 19h00</td>
                        <td class="text-center">8h00 às 14h00</td>
                    </tr>
                </tbody>
            </table>
        </div>
          <!--END TABELA-->

          <!--TABELA MOBILE-->
        <div class="container mt-5 mb-5 container-mobile">
            <div class="row">
                <div class="col-12">
                    <h1 class="divisor text-center mt-3 mb-5">Horário de atendimento</h1>
                </div>
            </div>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th class="text-center" scope="col">Segunda-feira</td>
                        <td class="text-center">8h00 às 19h00</th>
                    </tr>
                    <tr>
                        <th class="text-center" scope="col">Terça-feira</td>
                        <td class="text-center">8h00 às 19h00</td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="col">Quarta-feira</td>
                        <td class="text-center">8h00 às 19h00</td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="col">Quinta-feira</td>
                        <td class="text-center">8h00 às 19h00</td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="col">Sexta-feira</td>
                        <td class="text-center">8h00 às 19h00</td>
                    </tr>
                    <tr>
                        <th class="text-center" scope="col">Sábado</td>
                        <td class="text-center">8h00 às 14h00</td>
                    </tr>
                </tbody>
            </table>
        </div>
          <!--END TABELA-->
          

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
    
    
    <!--<div class="container-fluid mt-3 bg-light">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                <p class="">Biblioteca FMU</p>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4  text-center">
              <div>
                <h2>Contato</h2>
                <h4>biblioteca@fmu.edu.br</h4>
                <h4>(11) 91234-5678</h4>
              </div>
                
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4  text-center">
                  <h2>Redes</h2>
                    <img src="./assets/svg/instagram.svg" width="50px"/>
                    <img src="./assets/svg/facebook.svg" width="50"/>
                    <img src="./assets/svg/twitter.svg" width="50"/>                      
                </div>
              </div>                  
            </div>-->                
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>