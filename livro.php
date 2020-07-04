<?php

    class Livro{
        private $titulo;
        private $autor;
        private $ano;
        private $edicao; 

    //Metodo Construtor
    public function __construct($argTitulo = "", $argAutor = "", $argAno = 0, $argEdicao = 0){
        $this->titulo = $argTitulo;
        $this->autor = $argAutor;
        $this->ano = $argAno;
        $this->edicao = $argEdicao;
    }

    public function setTitulo(){
        $this->titulo = $_POST['titulo'];
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setAutor(){
        $this->autor = $_POST['autor'];
    }

    public function getAutor(){
        return $this->autor;
    }

    public function setAno(){
        $this->ano = $_POST['ano'];
    }

    public function getAno(){
        return $this->ano;
    }

    public function setEdicao(){
        $this->edicao = $_POST['edicao'];
    }

    public function getEdicao(){
        return $this->edicao;
    }
}