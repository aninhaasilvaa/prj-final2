<?php 

include "../Conexao.php";

    class Cliente{
        private $id;
        private $nomeCliente;
        private $cpfCliente;
        private $emailCliente;
        private $senhaCliente;
        private $logradouroCliente;
        private $numLogCliente;
        private $compCliente;
        private $bairroCliente;
        private $cidadeCliente;
        private $ufCliente;
        private $cepCliente;


        //Getters//

        public function getId(){
            return $this->id;
        }

        public function getNomeCliente(){
            return $this->nomeCliente;
        }

        public function getCpfCliente(){
            return $this->cpfCliente;
        }
        
        public function getEmailCliente(){
            return $this->emailCliente;
        }

        public function getSenhaCliente(){
            return $this->senhaCliente;
        }

        public function getLogradouroCliente(){
            return $this->logradouroCliente;
        }

        public function getNumLogCliente(){
            return $this->numLogCliente;
        }

        public function getCompCliente(){
            return $this->compCliente;
        }

        public function getBairroCliente(){
            return $this->bairroCliente;
        }

        public function getCidadeCliente(){
            return $this->cidadeCliente;
        }

        public function getUfCliente(){
            return $this->ufCliente;
        }

        public function getCepCliente(){
            return $this->cepCliente;
        }

        //Setters//

        public function setId($id){
            $this -> id = $id;
        }

        public function setNomeCliente($nomeCliente){
            $this -> nomeCliente = $nomeCliente;
        }

       public function setCpfCliente($cpfCliente){
            $this -> cpfCliente = $cpfCliente;
        }

        public function setEmailCliente($emailCliente){
            $this -> emailCliente = $emailCliente;
        }

        public function setSenhaCliente($senhaCliente){
            $this -> senhaCliente = $senhaCliente;
        }

        public function setLogradouroCliente($logradouroCliente){
            $this -> logradouroCliente = $logradouroCliente;
        }

        public function setNumLogCliente($numLogCliente){
            $this -> numLogCliente = $numLogCliente;
        }

        public function setCompCliente($compCliente){
            $this -> compCliente = $compCliente;
        }

        public function setBairroCliente($bairroCliente){
            $this -> bairroCliente = $bairroCliente;
        }

        public function setCidadeCliente($cidadeCliente){
            $this -> cidadeCliente = $cidadeCliente;
        }

        public function setUfCliente($ufCliente){
            $this -> ufCliente = $ufCliente;
        }

        public function setCepCliente($cepCliente){
            $this -> cepCliente = $cepCliente;
        }

    }

?>