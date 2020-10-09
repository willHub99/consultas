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
  $usuario->__set('contato', $_POST['contato']);
  $usuario->__set('idade', $_POST['idade']);
  $usuario->__set('sexo', $_POST['sexo']);
  $usuario->__set('rg', $_POST['rg']);
  $usuario->__set('cpf', $_POST['cpf']);
  $usuario->__set('dataNacimento', $_POST['datanascimento']);
  $usuario->__set('senha', $_POST['senha']);
  $usuario->__set('repetirSenha', $_POST['repetirsenha']);
  $usuario->__set('email', $_POST['email']);
  $usuario->__set('repetirEmail', $_POST['repetiremail']);
  $usuario->__set('endereco', $_POST['endereco']);
  $usuario->__set('municipio', $_POST['municipio']);
  $usuario->__set('estado', $_POST['estado']);


  function cadastraUsuario($PDO, $usuario){
    $nome = $usuario->__get('nome');
    $contato = $usuario->__get('contato');
    $idade = $usuario->__get('idade');
    $sexo = $usuario->__get('sexo');
    $rg = $usuario->__get('rg');
    $cpf = $usuario->__get('cpf');
    $datanascimento = $usuario->__get('dataNacimento');
    $senha = $usuario->__get('senha');
    $email = $usuario->__get('email');
    $endereco = $usuario->__get('endereco');
    $municipio = $usuario->__get('municipio');
    $estado = $usuario->__get('estado');

    $sql = 'INSERT INTO usuario(nomeUsuario, contatoUsuario, idadeUsuario, sexoUsuario, cpfUsuario, rgUsuario, dataNascimento, senhaUsuario, emailUsuario, enderecoUsuario, municipioUsuario, estadoUsuario) 
            VALUES(:nome, :contato, :idade, :sexo, :rg, :cpf, :datan, :senha, :email, :endereco, :municipio, :estado)';
    $stmt = $PDO->prepare( $sql );
    $stmt->bindParam( ':nome', $nome);
    $stmt->bindParam( ':contato', $contato);
    $stmt->bindParam( ':idade',$idade);
    $stmt->bindParam( ':sexo',$sexo);
    $stmt->bindParam( ':rg',$rg);
    $stmt->bindParam( ':cpf',$cpf);
    $stmt->bindParam( ':datan',$datanascimento);
    $stmt->bindParam( ':senha',$senha);
    $stmt->bindParam( ':email',$email);
    $stmt->bindParam( ':endereco',$endereco);
    $stmt->bindParam( ':municipio',$municipio);
    $stmt->bindParam( ':estado',$estado);
    $stmt->execute();
  }
  cadastraUsuario($PDO, $usuario);
  header('Location: cadastro.php?registro=1');
?>
