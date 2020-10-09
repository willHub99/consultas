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

    <title>Listar consultas</title>
  </head>

  <body>

    <header> <!--inicio header-->
        <div class="container"> <!--inicio container menu-->
          <nav class="navbar navbar-expand-lg navbar-light bg-primary"> <!--inicio navbar menu-->
            <i class="fas fa-clipboard-list display-3 text-light"></i>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link text-light" href="cadastrarConsulta.php">Consulta</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="dadosUsuario.html">Perfil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="listarConsultas.php">Histórico <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="index.php">Sair</a>
                </li>
              </ul>
            </div>
          </nav> <!--fim navbar menu-->
        </div>  <!--fim container menu-->
    </header> <!--fim header-->

    <br><br> <br>
    <div class="container justify-content-center"> <!--inicio container-->
      <table class="table"> <!--inicio tabela dados usuario-->
        <thead> <!--inicio cabecalho tabela dados usuario-->
          <tr>
            <th scope="col">Nome Paciente</th>
            <th scope="col">Id Consulta</th>
            <th scope="col">Nome acompanhante</th>
            <th scope="col">Sintomas</th>
            <th scope="col">Tipo da consulta</th>
            <th scope="col">Data da consulta</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead> <!--fim cabecalho tabela dados usuario-->

        <tbody>  <!--inicio corpo tabela dados usuario-->
          <tr>
            <td>willian</td>
            <td id="idusuario">3</td>
            <td>miguel</td>
            <td>coronga</td>
            <td>clínico geral</td>
            <td>2020/10/20</td>
            <td><button class="btn btn-success btn-sm"><i class="fas fa-check" onclick="marcarConcluido()"></i></button></td>
            <td><button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt" onclick="removerConsulta()"></i></button></td>
            <td><button class="btn btn-primary btn-sm"><i class="fas fa-cog" onclick="alterarConsulta()"></i></button></td>
          </tr>
        </tbody> <!--fim corpo tabela dados usuario-->
      </table>  <!--fim tabela dados usuario-->
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
    <script src="consultas.js"></script>
  </body>
</html>