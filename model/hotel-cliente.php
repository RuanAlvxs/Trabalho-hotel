<?php

    // AQUI É FEITA A CRIAÇÃO DA CLASSE HOTEL
    class hotel{
        private $dias;
        private $quartos;
        
        public function getDias(){
            return $this->dias;
        }
        public function setDias($dias){
            $this->dias = $dias;
        }
        public function getQuartos()
        {
            return $this->quartos;
        }
        public function setQuartos($quartos)
        {
            $this->quartos = $quartos;
        }
        function calcularDiaria(){
            if($this->quartos == 'Suite Síngle'){
                return $this->dias * 100;
            } else if($this->quartos == 'Suíte Double Master'){
                return $this->dias * 150;
            } else if($this->quartos == 'Suíte Família'){
                return $this->dias * 180;
            } else{
                return null;
            }
        }
        function selecionarCategoria(){
            if($this->quartos == 'Suite Síngle'){
                return "Suite Síngle";
            } else if($this->quartos == 'Suíte Double Master'){
                return "Suíte Double Master";
            } else if($this->quartos == 'Suíte Família'){
                return "Suíte Família";
            } else{
                return null;
            }
        }
}
    // AQUI É FEITA A CRIAÇÃO DA CLASSE CLIENTE
    class cliente{
        private $nome;
        private $rg;
        private $email;
        private $telefone;

    function getNome(){
        return $this->nome;
    }
    function setNome($nome){
        $this->nome = $nome;
    }
    function getRg(){
        return $this->rg;
    }
    function setRg($rg){
        $this->rg = $rg;
    }
    function getEmail(){
        return $this->email;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function getTelefone(){
        return $this->telefone;
    }
    function setTelefone($telefone){
        $this->telefone = $telefone;
    }
}
?>