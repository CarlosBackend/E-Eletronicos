<?php
require_once "classes/Produto.php";
class Controlador {

    public function index(){
        $prod = new Produto();
        $ret = $prod->gerarProdutos();
       require_once "public/home/home.php";
    }
    public function metodo():void{
        require_once "public/carrinho/index.php";
    }
}