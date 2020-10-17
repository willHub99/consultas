<?php

    if(isset($_GET['id'])){
      $arquivo = fopen('id.txt','w+');
      fwrite($arquivo, $_GET['id']);
      fclose($arquivo);
    }

    $arquivo = fopen('id.txt','r');
    $string = file_get_contents('id.txt');
    fclose($arquivo);

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

  
  $id = $string;
  

  if(isset($acao) && $acao == 'dados'){
    $sql = "SELECT * FROM usuario WHERE " . $id;
    $result = $PDO->query( $sql );
    $rows = $result->fetchAll( PDO::FETCH_ASSOC);
  }

  if(isset($acao) && $acao == 'listar'){
    $sql = "SELECT * FROM consulta WHERE" . $id;
    $result = $PDO->query( $sql );
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

  }

?>