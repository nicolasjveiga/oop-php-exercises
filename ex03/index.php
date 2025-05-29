<?php
class Produto {
    private string $nome;
    private float $preco;
    private int $estoque;

    public function __construct(string $nome, float $preco, int $estoque) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function getNome(): string { return $this->nome; }
    public function getPreco(): float { return $this->preco; }
    public function getEstoque(): int { return $this->estoque; }

    public function reduzirEstoque(int $quantidade): bool {
        if ($this->estoque >= $quantidade) {
            $this->estoque -= $quantidade;
            return true;
        }
        return false;
    }
}
class ItemPedido {
    private Produto $produto;
    private int $quantidade;

    public function __construct(Produto $produto, int $quantidade) {
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }

    public function getSubtotal(): float {
        return $this->produto->getPreco() * $this->quantidade;
    }

    public function getProduto(): Produto {
        return $this->produto;
    }

    public function getQuantidade(): int {
        return $this->quantidade;
    }
}
class Pedido {
    private array $itens = [];
    private string $formaPagamento;

    public function __construct(string $formaPagamento) {
        $this->formaPagamento = $formaPagamento;
    }

    public function adicionarItem(ItemPedido $item): void {
        $produto = $item->getProduto();
        if ($produto->reduzirEstoque($item->getQuantidade())) {
            $this->itens[] = $item;
        } else {
            echo "Estoque insuficiente para o produto: {$produto->getNome()}\n";
        }
    }

    public function calcularTotal(): float {
        $total = 0;
        foreach ($this->itens as $item) {
            $total += $item->getSubtotal();
        }
        return $total;
    }

    public function getFormaPagamento(): string {
        return $this->formaPagamento;
    }
}

$p1 = new Produto("Arroz", 20.0, 10);
$p2 = new Produto("Feijão", 8.5, 5);

$pedido = new Pedido("cartao");


$pedido->adicionarItem(new ItemPedido($p1, 2));
$pedido->adicionarItem(new ItemPedido($p2, 3));

echo "Total do pedido: R$ " . $pedido->calcularTotal() . "\n";
echo "Forma de pagamento: " . $pedido->getFormaPagamento() . "\n";
