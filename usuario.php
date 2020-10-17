<?php

    class Usuario {
        private $nome;
        public  $contato;
        private $idade;
        private $sexo;
        private $rg;
        private $cpf;
        private $dataNacimento;
        private $senha;
        private $repetirSenha;
        private $email;
        private $repetirEmail;
        private $endereco;
        private $municipio;
        private $estado;


        public function __get($valor){
            return $this->$valor;
        }
        public function __set($propriedade,$valor){
            $this->$propriedade = $valor;
        }
    }
?>