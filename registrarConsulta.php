<?php

  require_once "consulta.php";

  echo '<pre>';
  print_r($_GET);
  echo '<pre>';

  define( 'MYSQL_HOST', 'localhost' );
  define( 'MYSQL_USER', 'root' );
  define( 'MYSQL_PASSWORD', '' );
  define( 'MYSQL_DB_NAME', 'sistema_consultas' );

  try
  {
    $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );
  }
  catch ( PDOException $e )
  {
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
  }

  if(isset($_GET['crud']) && $_GET['crud']=='inserir') { 
    $consulta = new Consulta();
    $consulta->__set('nomePaciente', $_POST['paciente']);
    $consulta->__set('nomeAcompanhante', $_POST['acompanhante']);
    $consulta->__set('dataConsulta', $_POST['dataconsulta']);
    $consulta->__set('sintomas', $_POST['sintomas']);
    $consulta->__set('tipoConsulta', $_POST['tipoconsulta']);

    $sql = "SELECT idUsuario, nomeUsuario FROM usuario";
    $result = $PDO->query( $sql );
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
    

    for($i=0; $i< sizeof($rows);$i++){
      if ($rows[$i]['nomeUsuario'] == $consulta->__get('nomePaciente') || $rows[$i]['nomeUsuario'] == $consulta->__get('nomeAcompanhante')){
        $idUser = $rows[$i]['idUsuario'];
      }
  } 

      function inserir($PDO, $consulta, $idUser){

        $idPaciente = $idUser;
        $statusConulta = 1;
        $nomePaciente = $consulta->__get('nomePaciente');
        $nomeAcompanhante = $consulta->__get('nomeAcompanhante');
        $data = $consulta->__get('dataConsulta');
        $sintomas = $consulta->__get('sintomas');
        $tipo = $consulta->__get('tipoConsulta');

        $sql = 'INSERT INTO consulta(idUsuario, statusConsulta, nomePaciente, nomeAcompanhante, dataConsulta, tipoConsulta, sintomas) VALUES(:id,:statusc, :paciente, :acompanhante, :datac, :tipo, :sintomas)';
        $stmt = $PDO->prepare( $sql );
        $stmt->bindParam( ':paciente', $nomePaciente);
        $stmt->bindParam( ':acompanhante', $nomeAcompanhante );
        $stmt->bindParam( ':datac',$data);
        $stmt->bindParam( ':tipo',$tipo);
        $stmt->bindParam( ':sintomas',$sintomas);
        $stmt->bindParam( ':id',$idPaciente);
        $stmt->bindParam( ':statusc',$statusConulta);
        $stmt->execute();
      }

        inserir($PDO, $consulta, $idUser);
        header('Location: cadastrarConsulta.php?registro=1');
    }

    $id = $_GET['id'];
    if(isset($_GET['crud']) && $_GET['crud']=='remover') { 

    function remover($PDO, $id){
      $idconsulta = $id;
      $sql = "DELETE FROM consulta WHERE idConsulta = :id";
      $stmt = $PDO->prepare( $sql );
      $stmt->bindParam( ':id', $idconsulta);
      $result = $stmt->execute();
    }
      remover($PDO, $id);
      header('Location: listarConsultas.php');
    }

    if(isset($_GET['crud']) && $_GET['crud']=='concluido') {

      function concluido($PDO, $id){
        $idconsulta = $id;
        $status = 0;
        $sql = "UPDATE consulta set statusConulta = :status WHERE idConsulta = :id";
        $stmt = $PDO->prepare( $sql );
        $stmt->bindParam( ':status', $status);
        $stmt->bindParam( ':id', $idconsulta);
        $result = $stmt->execute();
      }
        concluido($PDO, $id);
        header('Location: listarConsultas.php');
    }


    function editar(){
      
    }
    function recuperar(){
      
    }


?>

