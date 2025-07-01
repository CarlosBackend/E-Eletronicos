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
            $linha = -1; // Variável para controlar a linha do carrinho
            $existe = false; // Variável para verificar se o produto já existe no carrinho

            if(isset($_SESSION['carrinho'])):

                // Verifica se o produto já está no carrinho
                foreach($_SESSION['carrinho'] as $linha => $valor):
                    if($valor['id'] == $id):
                        $existe = true; // Produto já existe no carrinho
                        endif;
                    endforeach;
                   endif;

            if(!$existe):
            $produto = (new Produto())->obterProdutoPorId($id);
            var_dump($produto);

            $_SESSION['carrinho'][$linha +1]['id'] = $produto->getId();
            $_SESSION['carrinho'][$linha +1]['descricao'] = $produto->getDescricao();
            $_SESSION['carrinho'][$linha +1]['preco'] = $produto->getPreco();
            $_SESSION['carrinho'][$linha +1]['imagem'] = $produto->getImagem();
            $_SESSION['carrinho'][$linha +1]['qtde'] = 1;
                endif;
            endif;
        require_once "public/carrinho/index.php";
    }
    public function atualizarCarrinho(): void{
        if($_POST):
            $linha = $_POST['linha']; // Obtém a linha do carrinho
            $qtde = $_POST['quantidade']; // Obtém a nova quantidade
            if($qtde >0):
                $_SESSION['carrinho'][$linha]['qtde'] = $qtde; // Atualiza a quantidade do produto na sessão
            endif;
        endif;  

    }
}