<?php

class Universidade {
    public $universidade;

    public function informarUniversidade(){
        $universidade = readline("Digite o nome da universidade: ");
        $this->universidade = $universidade;
        echo "Universidade: $universidade\n";
        return $universidade;
    }
}

class Pessoa extends Universidade{
    public $nome;
    public $universidade;

    public function informarNome(){
        $nome = readline("Digite o seu nome: ");
        $this->nome = $nome;
        $this->informarUniversidade();
        echo "Nome: $nome\n";
        return $nome;
    }
}
$teste = new Universidade;
$teste2 = new Pessoa;
$teste2->informarNome();
