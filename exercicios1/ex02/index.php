<?php

class Universidade {
    public $universidade;

    function __construct($universidade)
    {
        $this->universidade = $universidade;
    }

    public function informarUniversidade(){
        echo "Universidade: $this->universidade\n";
        return $this->universidade;
    }
}

class Person extends Universidade{
    public $nome;

    function __construct($nome, $universidade){
        $this->nome = $nome;
        $this->universidade = $universidade;
    }

    public function informarNome(){
        echo "Nome: $this->nome\n";
        echo "Trabalha na $this->universidade\n";
        return $this->nome;
    }
}
$universidade = new Universidade('universidade1');
$universidade->informarUniversidade();

$pessoa2 = new Person('pessoa2', 'universidade2');
$pessoa2->informarNome();
