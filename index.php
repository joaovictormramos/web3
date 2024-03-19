<?php
    include_once "controllers/NoticiaController.php";
    include_once "controllers/CategoriaController.php";
    include_once "controllers/IndexController.php";
    include_once "models/Noticia.php";
    include_once "models/Categoria.php";

    define("APP", "http://localhost/web3/");
    //echo "<h1>ola mundo PHP</h1>";
    if (isset($_GET['url'])) {
        $url = $_GET['url'];
    } else {
        $url = 'index/index';
    }
    $url = explode('/', $url);
    //var_dump($url);
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