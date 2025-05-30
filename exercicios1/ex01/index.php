<?php

class Pessoa {
    public $nome;
    public $idade;
    public $dia;
    public $mes;
    public $ano;

    function __construct($nome, $idade, $dia, $mes, $ano){
        $this->nome=$nome;
        $this->idade=$idade;
        $this->dia=$dia;
        $this->mes=$mes;
        $this->ano=$ano;
    }

    function calculaIdade($diaAtual, $mesAtual, $anoAtual){
        if($this->mes >= $mesAtual){
            if($this->mes == $mesAtual){
                if($this->dia > $diaAtual){
                    $this->idade = $anoAtual - $this->ano - 1;
                } else {
                    $this->idade = $anoAtual - $this->ano;
                }
            }
            $this->idade = $anoAtual - $this->ano -1;
        } else {
            $this->idade = $anoAtual - $this->ano;
        }
        echo "$this->idade anos\n";
        return $this->idade;
    }

    function ajustaDataDeNascimento(){
        $this->dia = readline("Digite o dia de nascimento: ");
        $this->mes = readline("Digite o mes de nascimento: ");
        $this->ano = readline("Digite o ano de nascimento: ");
        echo "$this->dia/$this->mes/$this->ano\n";
    }


    function informaIdade(){
        echo "$this->idade anos\n";
        return $this->idade;
    }

    function informaNome(){
        echo "$this->nome \n";
        return $this->nome;
    }
}

$pessoa1 = new Pessoa("Pessoa 1", 20, 01, 01, 2000);
$pessoa1->informaNome();
$pessoa1->calculaIdade(30, 05, 2025);
$pessoa1->informaIdade();
$pessoa1->ajustaDataDeNascimento();
$pessoa1->calculaIdade(30, 05, 2025);
$pessoa1->informaIdade();


$pessoa2 = new Pessoa("Pessoa 2", 20, 31, 12, 2005);
$pessoa2->informaNome();
$pessoa2->calculaIdade(30, 05, 2025);
$pessoa2->informaIdade();
$pessoa2->ajustaDataDeNascimento();
$pessoa2->calculaIdade(30, 05, 2025);
$pessoa2->informaIdade();


