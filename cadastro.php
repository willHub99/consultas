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

    <title>Cadastro</title>
  </head>

  <body>

    <header> <!--inicio header-->
        <div class="container bg-primary p-3 text-light "><!--inicio div cabecalho-->
          <i class="fas fa-id-card-alt display-3"></i>
          <h1 class="d-inline-block">Cadastro</h1>
        </div>  <!--fim div cabecalho-->
    </header> <!--fim header-->
    <br>
    <?php if(isset($_GET['registro']) && $_GET['registro']==1) { ?>
    <div class="container"> <!--inicio container confirmar cadastro-->
      <div class="row"> <!--inicio row confirm cadastro-->
        <div class="col-md-12"> <!--inicio div confirmar cadastro-->
          <h1 class="bg-success text-light">Cadastro realizado com sucesso</h1>
          <a href="index.php" class="badge badge-primary p-3 mt-2">Voltar</a>
        </div> <!--fim div confirmar cadastro-->
      </div> <!--fim row confirm cadastro-->
  </div> <!--fim container confirmar cadastro-->
  <?php } ?>
    <div class="container justify-content-center"> <!--inicio container-->
        <div class="row justify-content-center"> <!--inicio div formulario-->
            <div class="col-md-12 form-group m-4 p-5">  <!--inicio grid formulario-->
                <form method="post" action="registrarUsuario.php"> <!--inicio formulario-->

                  <div class="row"> <!--inicio row nome/contato/idade/sexo-->
                      <div class="col-md-3"> <!--inicio div nome-->
                        <label for="nome">Nome</label>
                        <input class="form-control mr-5" type="text" name="nome" placeholder="Ex: João da Silva">
                  </div> <!--fim div nome-->
                  <div class="col-md-3"> <!--inicio div contato-->
                        <label for="contato">Contato</label>
                        <input class="form-control mr-5" type="text" name="contato" placeholder="Ex: (45) 9 99999999">
                  </div> <!--fim div contato-->
                  <div class="col-md-3"> <!--inicio div idade-->              
                        <label for="idade">Idade</label>
                        <input class="form-control" type="text" name="idade" placeholder="Ex: 18">
                  </div> <!--fim div idade-->
                  <div class="form-group col-md-3">  <!--inicio div sexo-->
                        <label for="sexo">Sexo</label>
                        <select id="inputState" class="form-control" name="sexo">
                          <option selected>Sexo</option>
                          <option>F</option>
                          <option>M</option>
                        </select>
                  </div> <!--fim div sexo-->
                  </div>  <!--fim row nome/contato/idade/sexo-->
                  <div class="row">  <!--inicio row cpf/rg/datanascimento-->
                      <div class="col-md-4"> <!--inicio div cpf-->
                          <label for="cpf">CPF</label>
                          <input class="form-control" type="text" name="cpf" placeholder="Ex: 999999999-99">
                      </div>  <!--fim div cpf-->
                      <div class="col-md-4">  <!--inicio rg-->
                        <label for="rg">RG</label>
                        <input class="form-control" type="text" name="rg" placeholder="Ex: 99999999-9">
                      </div>  <!--fim rg-->
                      <div class="col-md-4"> <!--inicio div data nascimento-->
                        <label for="datanascimento">Data de Nascimento</label>
                        <input class="form-control" type="date" name="datanascimento" placeholder="Ex: Dia/Mes/Ano">
                      </div> <!--fim div data nascimento-->
                  </div> <!--fim row cpf/rg/datanascimento-->
                  <div class="row"> <!--inicio row senha-->
                      <div class="col-md-6"> <!--inicio div senha-->
                        <label for="senha">Senha</label>
                        <input class="form-control mr-5" type="password" name="senha" placeholder="Digite sua senha">
                      </div>  <!--fim div senha-->

                      <div class="col-md-6"> <!--inicio div nova senha-->
                        <label for="repetirsenha">Repetir Senha</label>
                        <input class="form-control" type="password" name="repetirsenha" placeholder="Digite sua senha">
                      </div>  <!--fim div nova senha-->
                  </div>  <!--fim row senha-->
                  <div class="row">  <!--inicio row email-->
                      <div class="col-md-6">   <!--inicio div email-->
                        <label for="email">E-mail</label>
                        <input class="form-control mr-5" type="email" name="email" placeholder="encurso@gmail.com.br">
                      </div>  <!--fim div email-->

                      <div class="col-md-6"> <!--inicio div novo email-->
                        <label  for="repetiremail">Repetir E-mail</label>
                        <input class="form-control" type="email" name="repetiremail" placeholder="encurso@gmail.com.br">
                      </div>  <!--fim div novo email-->
                  </div>  <!--fim row email-->
                  <div class="row"> <!--inicio row endereco/municipio/estado-->
                      <div class="col-md-4"> <!--inicio div endereco-->
                        <label for="endereco">Endereço</label>
                        <input class="form-control" type="text" name="endereco" placeholder="Ex: Rua das Camélias">
                      </div>  <!--fim div endereco-->
                      <div class="col-md-4"> <!--inicio div municipio-->
                        <label for="municipio">Município</label>
                        <input class="form-control" type="text" name="municipio" placeholder="Ex: Toledo">
                      </div>  <!--fim div municipio-->
                      <div class="form-group col-md-4">  <!--inicio div estado-->
                        <label for="estado">Estado</label>
                        <select id="inputState" class="form-control" name="estado">
                          <option selected>Estado</option>
                          <option>AC</option>
                          <option>AL</option>
                          <option>AP</option>
                          <option>AM</option>
                          <option>BA</option>
                          <option>CE</option>
                          <option>ES</option>
                          <option>GO</option>
                          <option>MA</option>
                          <option>MT</option>
                          <option>MS</option>
                          <option>MG</option>
                          <option>PA</option>
                          <option>PB</option>
                          <option>PR</option>
                          <option>PE</option>
                          <option>PI</option>
                          <option>RJ</option>
                          <option>RN</option>
                          <option>RS</option>
                          <option>RO</option>
                          <option>RR</option>
                          <option>SC</option>
                          <option>SP</option>
                          <option>SE</option>
                          <option>TO</option>
                          <option>DF</option>
                        </select>
                      </div>  <!--inicio div estado-->
                  </div>  <!--fim row endereco/municipio/estado-->
                  <button class="btn btn-primary mt-3">Registrar</button>

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