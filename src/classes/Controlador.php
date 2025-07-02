<?php
    SESSION_START(); // Inicia a sessão
require_once "classes/Produto.php";
require_once "classes/Notification.php"; 
require_once "classes/Clientes.php";
class Controlador extends Notification {

    public function index(){
        $prod = new Produto();
        $ret = $prod->gerarProdutos();
       require_once "public/home/home.php";
    }
    public function metodo():void{
        $id = 0;
        $cliente = (new Clientes())->obterClientes();

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

            if(!isset($_SESSION['qtdeprodutos'])):
                    $_SESSION['qtdeprodutos'] = 0; // Inicializa a quantidade de produtos no carrinho
                endif;
                $_SESSION['qtdeprodutos'] +=1; // Incrementa a quantidade de produtos no carrinho
                endif;
            endif;
        require_once "public/carrinho/index.php";
    }
    public function atualizarCarrinho(): void{

        if($_GET):

            $linha = $_GET['linha']; // Obtém a linha do carrinho

            if(isset($_SESSION['carrinho'][$linha])):
                $_SESSION['qtdeprodutos'] -=$_SESSION['qtdeprodutos'] += $itens['qtde'];
                unset($_SESSION['carrinho'][$linha]); // Remove o produto da sessão o metodo unset() é usado para remover um elemento de um array
            endif;
            // Redireciona para a página do carrinho após remover o produto
            header("Location: index.php?arquivo=Controlador&metodo=metodo");
            exit; // Encerra o script após o redirecionamento
        endif;

        if($_POST):
            $linha = $_POST['linha']; // Obtém a linha do carrinho
            $qtde = $_POST['quantidade']; // Obtém a nova quantidade
            if($qtde >0):
                $_SESSION['carrinho'][$linha]['qtde'] = $qtde; // Atualiza a quantidade do produto na sessão

                $_SESSION['qtdeprodutos']=0;
                foreach($_SESSION['carrinho'] as $itens):
                    $_SESSION['qtdeprodutos'] += $itens['qtde'];
                    endforeach;
            endif;
        endif;  

    }

    public function finalizarCarrinho(): void {

         var_dump($_POST);

        // session_destroy(); // Destrói a sessão para finalizar o carrinho
        //unset($_SESSION['carrinho']); // Remove o carrinho da sessão
        //echo $this-> success('Carrinho finalizado com sucesso! Obrigado pela compra.','Controlador','metodo');
    }
}