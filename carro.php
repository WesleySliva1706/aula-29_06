<?php

    class Carro{
        private $marca;
        private $cor;
        private $placa;
        private $modelo;

    //Metodo Construtor
    public function __construct($argMarca = "", $argCor = "", $argPlaca = "", $argModelo = ""){
        $this->marca = $argMarca;
        $this->cor = $argCor;
        $this->placa = $argPlaca;
        $this->modelo = $argModelo;
    }

    public function setMarca($argMarca){ //alterei este "set" para deixa-lo da forma correta, recebendo um parâmetro.
                                        //Mudei algo no Exerc1 também. Dê uma olhada lá!
        $this->marca = $argMarca;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setCor(){
        $this->cor = $_POST['cor']; //não pode ficar assim, pois fica dependente de uma informação vinda do formulário.
                                        //Isso quebra a ideia de reaproveitamento de código da POO
                                        //Altere todos os sets para receber a informação no parâmetro
    }

    public function getCor(){
        return $this->cor;
    }

    public function setPlaca(){
        $this->placa = $_POST['placa'];
    }

    public function getPlaca(){
        return $this->placa;
    }

    public function setModelo(){
        $this->modelo = $_POST['modelo'];
    }

    public function getModelo(){
        return $this->modelo;
    }
}
