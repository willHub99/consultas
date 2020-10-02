<?php

    class Conexao {
        private $host = 'localhost';
        private $dbname = 'sistema_consultas';
        private $user = 'root';
        private $senha = '';

        public function conectar(){
            try {
                $conexao = new PDO(
                    "mysql:host=$this->host; dbanem=$this->dbname",
                    "$this->user",
                    "$this->senha"
                );
                return $conexao;
            }catch(PDOexception $e) {
                echo '<p>'.$e->getMessage().'</p>';
            }
        }
    }
?>