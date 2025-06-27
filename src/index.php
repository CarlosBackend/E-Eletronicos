<?php

if($_GET):

    $controller = $_GET['arquivo'];
    $metodo = $_GET['metodo'];

    require_once "classes/".$controller.".php";

    $obj = new $controller();
    if(method_exists($obj, $metodo)){
        $obj->$metodo();
    } else {
        echo "Método não encontrado.";
    }else:
        require_once "public/home/home.php";
        $obj = new Controlador();
        $obj->index();
endif;  
?>