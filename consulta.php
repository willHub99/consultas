<?php
    require_once "usuario.php";

    class Consulta {
        private $id;
        private $nomePaciente;
        private $nomeAcompanhante;
        private $dataConsulta;
        private $tipoConsulta;
        private $sintomas;

        public function __get($propriedade){
            return $this->$propriedade;
        }
        public function __set($atributo,$valor){
            $this->$atributo = $valor;
        }
    }

?>

