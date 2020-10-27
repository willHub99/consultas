<?php
      $acao = 'cadastrar';
      require_once "exibir.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="shortcut icon" href="./imagens/hospital.png"/>
    <!--Fontawesome-->
    <link rel="stylesheet" href="fontawesome/css/all.css">
    

    <title>Registrar consulta</title>
  </head>

  <body>

    <header> <!--inicio header-->
        <div class="container"> <!--inicio container menu-->
          <nav class="navbar navbar-expand-lg navbar-light bg-primary"> <!--inicio navbar menu-->
            <i class="fas fa-book-medical display-3 text-light"></i>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link text-light" href="cadastrarConsulta.php">Consulta <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="dadosUsuario.php">Perfil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="listarConsultas.php">Histórico</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="index.php">Sair</a>
                </li>
              </ul>
            </div>
          </nav> <!--fim navbar menu-->
        </div>  <!--fim container menu-->
    </header> <!--fim header-->

    <br>
    <?php if(isset($_GET['registro']) && $_GET['registro']==1) { ?>
    <div class="container"> <!--inicio container confirmar cadastro-->
      <div class="row"> <!--inicio row confirm cadastro-->
        <div class="col-md-12"> <!--inicio div confirmar cadastro-->
          <h1 class="bg-success text-light">Consulta cadastrada com sucesso</h1>
          <a href="cadastrarConsulta.php" class="badge badge-primary p-3 mt-2">Ok</a>
        </div> <!--fim div confirmar cadastro-->
      </div> <!--fim row confirm cadastro-->
  </div> <!--fim container confirmar cadastro-->
  <?php } ?>
    <br><br><br>
    <div class="container justify-content-center"> <!--inicio container-->
        <div class="container"> <!--inicio container consultas-->
            <form method="post" action="registrarConsulta.php?crud=inserir"> <!--inicio formulario-->
              <div class="row"> <!--inicio row nomes (paciente-acompanhante) consulta-->
                  <div class="form-group col-md-6">  <!--inicio nome paciente-->
                    <label for="paciente">Nome do paciente</label>
                    <input class="form-control" type="text" name="paciente" id="paciente" placeholder="Ex: João da Silva">
                  </div> <!--fim nome paciente-->

                  <div class="form-group col-md-6">  <!--inicio nome acompanhante-->
                    <label for="acompanhante">Nome do acompanhante</label>
                    <input class="form-control" type="text" name="acompanhante" id="acompanhante" placeholder="Ex: Miguel Antunes">
                  </div> <!--fim nome acompanhante-->
              </div>  <!--fim row nomes(paciente-acompanhante) consulta-->

              <div class="row"> <!--inicio row data/tipo consulta-->
                <div class="form-group col-md-6"> <!--inicio div data consulta-->
                  <label for="dataconsulta">Data da consulta</label>
                  <input type="date" class="form-control" id="dataconsulta" name="dataconsulta">
                </div> <!--inicio div data consulta-->
                <div class="form-group col-md-6"> <!--inicio div tipo consulta-->
                  <label for="tipoconsulta">Tipo da consulta</label>
                  <select class="form-control" id="tipoconsulta" name="tipoconsulta">
                    <option>Cirurgia Plástica</option>
                    <option>Cirurgia Vascular</option>
                    <option>Fonoaudiologia</option>
                    <option>Cardiologia</option>
                    <option>Cirurgia Geral</option>
                    <option>Clínico Geral</option>
                    <option>Pediatria</option>
                    <option>Outro</option>
                  </select>
                </div>   <!--fim div tipo consulta-->
              </div>  <!--fim row data/tipo consulta-->
              <div class="row"> <!--inicio row sintomas-->
                  <div class="col-md-12">  <!--inicio div sintomas-->
                    <label for="sintomas">Sintomas</label>
                    <textarea class="form-control" id="sintomas" name="sintomas" rows="3"></textarea>
                  </div> <!--fim div sintomas-->
              </div>  <!--fim row sintomas-->
              <div>
                  <input id="id" type='hidden' name='id' value='<?= $identificador ?> '>
              </div>

              <button class="btn btn-primary mt-3">Registrar consulta</button>
            </form> <!--fim formulario-->
        </div> <!--fim container consultas-->


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