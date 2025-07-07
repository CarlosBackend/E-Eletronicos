<?php 
use App\Controller\Controlador;

include "../vendor/autoload.php";

if($_GET):

    $dir = $_GET['dir'];
    $controller = $_GET['arquivo'];
    $metodo = $_GET['metodo'];

    if(isset($_GET['parametro'])):
        $parametro = $_GET['parametro'];
    endif;

    $classes = "App\\".$dir."\\".$controller;
    

    $obj = new $classes;
    if(isset($_GET['parametro']) && $_GET['parametro'] !== ''):
        $obj->$metodo($parametro); 
    else:
        $obj->$metodo();
    endif;
    

else:
    $obj = new Controlador();
    $obj->index();

endif;
?>