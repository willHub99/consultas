/*definição de uma classe que define atributos e métodos para o processo de CRUD de uma consulta, tendo como parametros objetos das classes
usurio, medico, conexao*/

<?php
    class Consulta {
        private $nomePaciente;
        private $nomeAcompanhante;
        private $dataConsulta;
        private $tipoConsulta;
        private $sintomas;

        public function __get($valor){
            return $this->valor;
        }
        public function __set($propriedade,$valor){
            $this->propriedade = $valor;
        }

        public function inserirConsulta() {

        }
        public function removerConsulta() {
            
        }
        public function editarConsulta() {
            
        }
        public function listarConsulta() {
            
        }

    }
?>

