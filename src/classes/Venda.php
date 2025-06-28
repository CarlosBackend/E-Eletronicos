<?php

class Venda {
    private float $valor;
    private Clientes $cliente;
    private DateTime $dataVenda;

    public function __construct(float $valor, Clientes $cliente) {
        $this->valor = $valor;
        $this->cliente = $cliente;
        $this->dataVenda = new DateTime();
    }

    public function getValor(): float {
        return $this->valor;
    }
    public function getCliente(): Clientes {
        return $this->cliente;
    }
    public function getDataVenda(): DateTime {
        return $this->dataVenda;
    }
}