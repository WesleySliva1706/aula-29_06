<?php
/*
Crie o código PHP para as classes do diagrama a seguir e implemente UM ARQUIVO ÚNICO
para exibir um objeto de cada uma das três classes (como feito na videoaula). Envie o link do
repositório no GitHub com sua implementação:

    Pessoa         Carro           Livro
- nome: char   - marca: char   - titulo: char
- idade: int   - cor: char     - autor: char
- peso: int    - placa: char   - ano: int
- sexo: int    - modelo: int   - edicao: int

https://github.com/WesleySliva1706/aula-29_06
*/

require_once 'Pessoa.php';
require_once 'Carro.php';
require_once 'Livro.php';

    //Instanciando Objetos
    $p = new Pessoa();
    $c = new Carro();
    $l = new Livro();

    //Chamada de Metodos
    //Set's
    //Pessoa
    $p->setNome();
    $p->setIdade();
    $p->setPeso();
    $p->setSexo();

    //Carro
    $c->setMarca($_POST['marca']);
    $c->setCor();
    $c->setPlaca();
    $c->setModelo();

    //Livro
    $l->setTitulo();
    $l->setAutor();
    $l->setAno();
    $l->setEdicao();

    echo "Pessoa<br>";
    echo 'Nome: '.$p->getNome().'.<br>';
    echo 'Idade: '.$p->getIdade().' anos.<br>';
    echo 'Peso: '.$p->getPeso().' Kg.<br>';
    echo 'Sexo: '.$p->getSexo().'.<hr>';

    echo "Carro<br>";
    echo 'Marca: '.$c->getMarca().'.<br>';
    echo 'Cor: '.$c->getCor().'.<br>';
    echo 'Placa: '.$c->getPlaca().'.<br>';
    echo 'Modelo: '.$c->getModelo().'.<hr>';

    echo "Livro<br>";
    echo 'Titulo: '.$l->getTitulo().'.<br>';
    echo 'Autor: '.$l->getAutor().'.<br>';
    echo 'Ano: '.$l->getAno().'.<br>';
    echo 'Edição: '.$l->getEdicao().'º Edição.';
