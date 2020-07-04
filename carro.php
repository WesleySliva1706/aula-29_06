<?php

    class Carro{
        private $marca;
        private $cor;
        private $placa;
        private $modelo; 

    //Metodo Construtor
    public function __construct($argMarca = "", $argCor = "", $argPlaca = "", $argModelo = 0){
        $this->marca = $argMarca;
        $this->cor = $argCor;
        $this->placa = $argPlaca;
        $this->modelo = $argModelo;
    }

    public function setMarca(){
        $this->marca = $_POST['marca'];
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setCor(){
        $this->cor = $_POST['cor'];
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