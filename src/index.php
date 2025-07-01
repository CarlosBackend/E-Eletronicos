<?php

require_once "classes/Produto.php"; // Inclui a classe Produto
if($_GET): // Verifica se existe algum parâmetro na URL

    $controller = $_GET['arquivo']; // 
    $metodo = $_GET['metodo'];

    require_once "classes/".$controller.".php";

    $obj = new $controller();
    $obj-> $metodo();
    else:
        require_once "classes/Controlador.php";
        $obj = new Controlador();
        $obj->index();
endif;  
?>