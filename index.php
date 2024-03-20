<?php
    include_once "controllers/NoticiaController.php";
    include_once "controllers/CategoriaController.php";
    include_once "controllers/IndexController.php";
    include_once "models/Noticia.php";
    include_once "models/Categoria.php";

    define("APP", "http://15.229.157.125/web3/");
    if (isset($_GET['url'])) {
        $url = $_GET['url'];
    } else {
        $url = 'index/index';
    }
    $url = explode('/', $url);

    $nomeControlador = ucfirst($url[0]) . "Controller";
    $controller = new $nomeControlador();
    $acao = $url[1];
    if (count($url) == 2) {
        $controller->$acao();
    } else {
        $id = $url[2];
        $controller->$acao($id);
    }

?>

