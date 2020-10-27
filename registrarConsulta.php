<?php

  require_once "consulta.php";
  echo "regisstrar consulta <br>";
  echo "<pre>";
  print_r($_GET);
  echo "</pre>";

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
 

      function inserir($PDO, $consulta, $idUser){

        $idPaciente = $_POST['id'];
        $statusConsulta = 0;
        $nomePaciente = $consulta->__get('nomePaciente');
        $nomeAcompanhante = $consulta->__get('nomeAcompanhante');
        $data = $consulta->__get('dataConsulta');
        $sintomas = $consulta->__get('sintomas');
        $tipo = $consulta->__get('tipoConsulta');

        $sql = 'INSERT INTO consulta(idUsuario, statusConsulta, nomePaciente, nomeAcompanhante, dataConsulta, tipoConsulta, sintomas) 
                VALUES(:id,:statusc, :paciente, :acompanhante, :datac, :tipo, :sintomas)';
        $stmt = $PDO->prepare( $sql );
        $stmt->bindParam( ':paciente', $nomePaciente);
        $stmt->bindParam( ':acompanhante', $nomeAcompanhante );
        $stmt->bindParam( ':datac',$data);
        $stmt->bindParam( ':tipo',$tipo);
        $stmt->bindParam( ':sintomas',$sintomas);
        $stmt->bindParam( ':id',$idPaciente);
        $stmt->bindParam( ':statusc',$statusConsulta);
        $stmt->execute();
      }

        inserir($PDO, $consulta, $idUser);
        header('Location: cadastrarConsulta.php?registro=1');
    }

    $id = $_GET['id'];
    if(isset($_GET['crud']) && $_GET['crud']=='remover') { 
      echo "remover";
      $idconsulta = $id;
      $sql = "DELETE FROM consulta WHERE idConsulta = :id";
      $stmt = $PDO->prepare( $sql );
      $stmt->bindParam( ':id', $idconsulta);
      $result = $stmt->execute();
      header('Location: listarConsultas.php?remover=1');

    }

    if(isset($_GET['crud']) && $_GET['crud']=='concluido') {
      echo "concluido";
      $idconsulta = $id;
      $status = 1;
      $sql = "UPDATE consulta set statusConsulta = :status WHERE idConsulta = :id";
      $stmt = $PDO->prepare( $sql );
      $stmt->bindParam( ':status', $status);
      $stmt->bindParam( ':id', $idconsulta);
      $result = $stmt->execute();
      header('Location: listarConsultas.php?concluido=1');

      }


    if(isset($_GET['crud']) && $_GET['crud']=='alterar') {
      $idconsulta = $id;
      $data = $_POST['data'];
      $sql = "UPDATE consulta set dataConsulta = :data WHERE idConsulta = :id";
      $stmt = $PDO->prepare( $sql );
      $stmt->bindParam( ':id', $idconsulta);
      $stmt->bindParam( ':data', $data);
      $result = $stmt->execute();
      header('Location: listarConsultas.php?alterar=1');

    }
?>

