<?php

abstract class Objeto {
    public $altura;
    public $largura;

    abstract public function calcularArea();
}

class Triangulo extends Objeto {
    public $tipo;

    public function __construct($altura, $largura, $tipo){
        $this->tipo = $tipo;
        $this->altura = $altura;
        $this->largura = $largura;
    }
    public function informarTipo(){
        echo "$this->tipo\n";
    }

    public function calcularArea(){
        $area = ($this->largura * $this->altura) / 2;
        echo "$area \n";
    }
}

class Retangulo extends Objeto {
    
    public function __construct($altura, $largura){
        $this->altura = $altura;
        $this->largura = $largura; 
    }

    public function quadrado(){
        if($this->altura == $this->largura){
            echo "É quadrado\n";
        } else {
            echo "É retangulo\n";
        }
    }

    public function calcularArea(){
        $area = $this->largura * $this->altura;
        echo "$area \n";
    }
}

$triangulo = new Triangulo(10, 10, "Equilátero");
$triangulo->calcularArea();
$triangulo->informarTipo();

$quadrado = new Retangulo (10, 10);
$quadrado->calcularArea();
$quadrado->quadrado();

$retangulo = new Retangulo (10, 15);
$retangulo->calcularArea();
$retangulo->quadrado();