<?php

class Clientes{
    private int $id;
    private string $nome;
    private string $cpf;


    public function __construct(int $id = 0, string $nome = '', string $cpf = '') {
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
    public function getId(): int {
        return $this->id;
    }
    public function getNome(): string {
        return $this->nome;
    }
    public function getCpf(): string {
        return $this->cpf;
    }
    public function obterClientes(): array {
        return $clientes = [
            new Clientes(1, "Fulano de Tal", "000.000.000-00"),
            new Clientes(2, "Ciclano da Sailva", "111.111.111-11"),
            new Clientes(3, "Beltrano de Souza", "222.222.222-22"),
        ];
    }
}
