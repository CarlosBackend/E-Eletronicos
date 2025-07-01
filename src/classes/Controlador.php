<?php
    SESSION_START();
require_once "classes/Produto.php";
class Controlador {

    public function index(){
        $prod = new Produto();
        $ret = $prod->gerarProdutos();
       require_once "public/home/home.php";
    }
    public function metodo():void{
        $id = 0;

        if($_GET && isset($_GET['id'])):
            $id = $_GET['id'];

            $produto = (new Produto())->obterProdutoPorId($id);
            var_dump($produto);

            $_SESSION['carrinho']['id'] = $id;
            $_SESSION['carrinho']['descricao'] = $produto->getDescricao();
            $_SESSION['carrinho']['preco'] = $produto->getPreco();
            $_SESSION['carrinho']['imagem'] = $produto->getImagem();
            $_SESSION['carrinho']['qtde'] = 1;
 
            endif;
        require_once "public/carrinho/index.php";
    }
}