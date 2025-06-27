<?php

class Controlador {

    public function index() {
       require_once "public/home/home.php";
    }

    public function metodo() {
        require_once "public/carrinho/index.php";
    }

    public function outroMetodo() {
        echo "Este é outro método do controlador.";
    }

    // Adicione mais métodos conforme necessário
}