<?php

    class Pessoa{
        private $nome;
        private $idade;
        private $peso;
        private $sexo;

    //Metodo Construtor
    public function __construct($argNome = "", $argIdade = 0, $argPeso = 0, $argSexo = ""){
        $this->nome = $argNome;
        $this->idade = $argIdade;
        $this->peso = $argPeso;
        $this->sexo = $argSexo;
    }

    public function setNome(){
        $this->nome = $_POST['nome'];
    }

    public function getNome(){
        return $this->nome;
    }

    public function setIdade(){
        $this->idade = $_POST['idade'];
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setPeso(){
        $this->peso = $_POST['peso'];
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setSexo(){
        if($_POST['sexo']==""){
            $this->sexo = "Não Informado";
        }

        else{
            $this->sexo = $_POST['sexo'];
        }
    }

    public function getSexo(){
        return $this->sexo;
    }

    //poderia ter um método para exibir os dados aqui.
    public function mostrarDados(){
      //não implementado ainda
    }
}
