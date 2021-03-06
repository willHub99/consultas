<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--Fontawesome-->
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <!--Estilos customizados-->
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="./imagens/hospital.png"/>
    <title>Login</title>
  </head>

  <body>

    <header> <!--inicio header-->
        <div class="container bg-primary p-3 text-light "><!--inicio div cabecalho-->
          <i class="fas fa-laptop-medical display-3"></i>
          <h1 class="d-inline-block">Login</h1>
        </div>  <!--fim div cabecalho-->
    </header> <!--fim header-->
    <br>
    <?php if(isset($_GET['registro']) && $_GET['registro']==0) { ?>
    <div class="container"> <!--inicio container confirmar cadastro-->
      <div class="row"> <!--inicio row confirm cadastro-->
        <div class="col-md-12"> <!--inicio div confirmar cadastro-->
          <h1 class="bg-danger text-light">Acesso negado!!!</h1>
          <a href="index.php" class="badge badge-primary p-3">Inserir os dados novamente</a>
        </div> <!--fim div confirmar cadastro-->
      </div> <!--fim row confirm cadastro-->
  </div> <!--fim container confirmar cadastro-->
    <?php } ?>
    <div class="container justify-content-center"> <!--inicio container-->
        <div class="row justify-content-center"> <!--inicio div formulario-->
            <div class="col-md-6 form-group m-4 p-5">  <!--inicio grid formulario-->
                <form method="post" action="login.php"> <!--inicio formulario-->
                  <i class="fas fa-user-tie text-primary display-3 d-flex justify-content-center"></i>
                  <br>
                  <label for="nome">Nome</label>
                  <input class="form-control" type="text" name="nome" placeholder="Ex: João da Silva">
                  <br>
                  <label for="senha">Senha</label>
                  <input class="form-control" type="password" name="senha" placeholder="Digite sua senha">
                  <br>
                  <label for="email">E-mail</label>
                  <input class="form-control" type="email" name="email" placeholder="encurso@gmail.com.br">
                  <br>
                  <button class="btn btn-primary mt-3">Acessar</button>
                  <br>
                  <span class="d-inline-block font-weight-bold">Caso não possua um cadastro</span>
                  <a href="cadastro.php" class="badge badge-primary">Cadastro</a>
                </form> <!--fim formulario-->
            </div>  <!--fim grid formulario-->
        </div>  <!--fim div formulario-->
    </div> <!--fim container-->

    <footer class="fixed-bottom">  <!--inicio rodape-->
      <div class="container bg-primary">  <!--inicio container-->
          <div class="row mt-3 p-3"> <!--inicio row-->
              <div class="col-md-4"> <!--inicio copright-->
                  <p>&copy; 2020 - Encurso - Todos os direitos reservados</p>
              </div> <!--fim copright-->  
              
              <div class="col-md-4"> <!--inicio informacoes contato empresa-->
                  <p>Endereço: Rua Santa Maria, 688, Sala 10</p>
                  <p>E-mail: fhpimenta@gmail.com.br</p>
                  
              </div> <!--fim informacoes contato empresa--> 

              <div class="col-md-4">  <!--inicio redes sociais-->
                    <p>Redes Sociais</p>
                    <a href="">  <!--inicio link twitter-->
                      <button class="btn btn-light">  <!--inicio botão twitter-->
                        <i class="fab fa-twitter"></i>
                      </button>  <!--inicio botão twitter-->
                    </a>  <!--fim link twitter-->

                    <a href="https://www.instagram.com/encurso.digital/?hl=pt-br">  <!--inicio link instagran-->
                      <button class="btn btn-light">  <!--inicio botão twitter-->
                        <i class="fab fa-instagram"></i>
                      </button>  <!--inicio botão twitter-->
                    </a>  <!--fim link instagran-->

                    <a href="https://www.facebook.com/encursodigital">  <!--inicio link faceboock-->
                      <button class="btn btn-light">  <!--inicio botão twitter-->
                        <i class="fab fa-facebook-f"></i>
                      </button>  <!--inicio botão faceboock-->
                    </a>  <!--fim link twitter-->
              </div>   <!--fim redes sociais-->
          </div>  <!--fim row-->
    </div>  <!--fim container-->
    </footer>  <!--fim rodape-->


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>