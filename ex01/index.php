<?php

// class Pessoa {
//     public $nome;
//     public $idade;
//     public $dia;
//     public $mes;
//     public $ano;

//     function __construct($nome, $idade, $dia, $mes, $ano){
//         $this->nome=$nome;
//         $this->idade=$idade;
//         $this->dia=$dia;
//         $this->mes=$mes;
//         $this->ano=$ano;
//     }

//     function calculaIdade($dia, $mes, $ano, $idade){
//         $diaAtual = (int) readline("Digite o dia atual: ");
//         $mesAtual = (int) readline("Digite o mes atual: ");
//         $anoAtual = (int) readline("Digite o ano atual: ");
//         $this->idade = $idade;

//         if($mes > $mesAtual){
//             if($mes == $mesAtual){
//                 if($dia > $diaAtual){
//                     $idade = $anoAtual - $ano - 1;
//                     return $idade;
//                 } else {
//                     $idade = $anoAtual - $ano;
//                     return $idade;
//                 }
//             }
//             $idade = $anoAtual - $ano -1;
//         } else {
//             $idade = $anoAtual - $ano;
//         }
//         $this->idade = $idade;
//         return $idade;
//     }

//     function ajustaDataDeNascimento($dia, $mes, $ano){
        
//     }


//     function informaIdade($idade){
//         return $this->idade = $idade;
//     }

//     function informaNome($nome){
//         return $this->nome = $nome;
//     }
// }

// $teste = new Pessoa("teste", 20, 20, 04, 2000);
// echo $teste->calculaIdade($teste->dia, $teste->mes, $teste->ano, $teste->idade);
// echo $teste->informaIdade($teste->idade);
// echo $teste->informaNome($teste->nome);


