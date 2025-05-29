<?php

class Contador{
    private int $i;

    public function __construct(int $i)
    {
        $this->i = $i;
    }
    public function getContagem()
    {
        echo "O contador está em: $this->i\n";
        return $this->i;
    }

    public function incrementar()
    {
        $this->i++;
    }

    public function zerar()
    {
        $this->i = 0;
    }
}

$contador = new Contador(10);
$contador->getContagem();
$contador->incrementar();
$contador->getContagem();
$contador->zerar();
$contador->getContagem();
