<?php

class Pessoa {
    public $nome;
    public $endereco;
    public $email;
    public $telefone;

    function __construct($nome, $endereco, $email, $telefone)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->telefone = $telefone;
    }
}

class Livro {
    public $nome;
    public $autor;
    public $paginas;
    public $disponivel;
    public $cliente;

    function __construct($nome, $autor, $paginas, $disponivel, $cliente)
    {
        $this->nome = $nome;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->disponivel = $disponivel;
        $this->cliente = $cliente;
    }

    function alugar($disponivel){
        if($disponivel == true){
            $disponivel = false;
            echo "Livro alugado com sucesso\n";
            return $disponivel;
        } else {
            echo "Livro não disponivel\n";
            return $disponivel;
        }
    }

    function devolver($disponivel){
        $disponivel = true;
        echo "Livro devolvido com sucesso!\n";
        return $disponivel;
    }

}

$pessoa1 = new Pessoa("teste", "teste", "teste@email.com", 1234);
$livro1 = new Livro("livro1", "autor1", 100, true, "");
$livro2 = new Livro("livro2", "autor2", 100, false, "");
//echo $livro1->alugar($livro1->disponivel);
echo $livro2->devolver($livro2->disponivel);