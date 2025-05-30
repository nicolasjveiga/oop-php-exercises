<?php

class Funcionario {
    public int $id;
    public string $nome;
    public string $cargo;
    public int $horas;

    public function __construct(int $id, string $nome, string $cargo, int $horas){
        $this->id = $id;
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->horas = $horas;
    }

    public function calculaSalario() {
        $salario = $this->horas * 50;
        echo "$this->nome é um $this->cargo e recebeu $salario\n"; 
        return  $salario;
    }
}

class Gerente extends Funcionario{
    public int $colaboradores;

    public function __construct(int $id, string $nome, string $cargo, int $horas, int $colaboradores){
        $this->id = $id;
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->horas = $horas;
        $this->colaboradores = $colaboradores;
    }
    public function calculaSalario(){
       $salario = $this->horas * 100;
        echo "$this->nome é um $this->cargo e recebeu R$ $salario\n"; 
        return  $salario;
    }
}

$teste = new Funcionario(1, "nome1", "vendedor", 10);
$teste->calculaSalario();

$teste2 = new Funcionario(2, "nome1", "vendedor", 100);
$teste2->calculaSalario();

$gerente = new Gerente(3, "gerente", "gerente", 10, 50);
$gerente->calculaSalario();

$gerente2 = new Gerente(4, "gerente", "gerente", 100, 50);
$gerente2->calculaSalario();


