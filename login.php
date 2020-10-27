<?php
  require_once "usuario.php";

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
  
  $usuario = new Usuario();
  $usuario->__set('nome', $_POST['nome']);
  $usuario->__set('senha', $_POST['senha']);
  $usuario->__set('email', $_POST['email']);

  function verificaUsuario($PDO, $usuario){
    $sql = "SELECT * FROM usuario";
    $result = $PDO->query( $sql );
    $rows = $result->fetchAll( PDO::FETCH_ASSOC );
    print_r($rows);

    $id;
    for($i=0; $i< sizeof($rows);$i++){
      if ($rows[$i]['nomeUsuario'] == $usuario->__get('nome') && $rows[$i]['senhaUsuario'] == $usuario->__get('senha') && $rows[$i]['emailUsuario'] == $usuario->__get('email')) {
        $id = $rows[$i]['idUsuario'];
        break;
      } 
  }

 
 
    for($i=0; $i< sizeof($rows);$i++){
      if ($rows[$i]['nomeUsuario'] == $usuario->__get('nome') && $rows[$i]['senhaUsuario'] == $usuario->__get('senha') && $rows[$i]['emailUsuario'] == $usuario->__get('email')) {
        header('Location: dadosUsuario.php?id='. $id);
        break;
      } 
      elseif ($rows[$i]['nomeUsuario'] != $usuario->__get('nome') || $rows[$i]['senhaUsuario'] != $usuario->__get('senha') || $rows[$i]['emailUsuario'] != $usuario->__get('email')) {
        header('Location: index.php?registro=0');
      }
  }
  }

  verificaUsuario($PDO, $usuario);
?>