<?php

class Pessoa {
    private string $nome;
    private string $endereco;
    private string $email;
    private string $telefone;

    public function __construct(string $nome, string $endereco, string $email, string $telefone) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function getNome(): string {
        return $this->nome;
    }
}

class Livro {
    private string $nome;
    private string $autor;
    private int $paginas;
    private bool $disponivel = true;
    private ?Pessoa $cliente = null;

    public function __construct(string $nome, string $autor, int $paginas) {
        $this->nome = $nome;
        $this->autor = $autor;
        $this->paginas = $paginas;
    }

    public function alugar(Pessoa $pessoa): void {
        if ($this->disponivel) {
            $this->disponivel = false;
            $this->cliente = $pessoa;
            echo "Livro '{$this->nome}' alugado para {$pessoa->getNome()}.\n";
        } else {
            echo "Livro '{$this->nome}' já está alugado.\n";
        }
    }

    public function devolver(): void {
        if (!$this->disponivel) {
            $nomePessoa = $this->cliente?->getNome();
            $this->disponivel = true;
            unset($this->cliente);
            $this->cliente = null;
            echo "Livro '{$this->nome}' devolvido por $nomePessoa.\n";
        } else {
            echo "Este livro já está disponível na biblioteca.\n";
        }
    }

    public function getStatus(): void {
        if ($this->disponivel) {
            echo "Livro '{$this->nome}' está disponível.\n";
        } else {
            echo "Livro '{$this->nome}' está alugado por " . $this->cliente->getNome() . ".\n";
        }
    }
}

$pessoa1 = new Pessoa("Ana", "Rua", "ana@email.com", "99999-0000");
$pessoa2 = new Pessoa("Bruno", "Rua B", "bruno@email.com", "88888-0000");

$livro1 = new Livro("Dom Casmurro", "Machado de Assis", 200);
$livro2 = new Livro("1984", "George Orwell", 300);

$livro1->alugar($pessoa1);
$livro1->alugar($pessoa2); 

$livro1->getStatus();


$livro1->devolver();
$livro1->getStatus();
