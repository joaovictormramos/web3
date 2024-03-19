<?php
  class NoticiaController {
    function listar() {
        $model = new Noticia();
        $dados = $model->all();
        $visao = "listagemNoticias";
        include_once "views/template.php";
    }
    function novo() {
      $dados = array();
      $dados['id'] = 0;
      $dados['titulo'] = "";
      $dados['data'] = "";
      $dados['autor'] = "";
      $dados['categoria_id'] = "";
      $dados['descricao'] = ""; 
      $modelCategoria = new Categoria();
      $categorias = $modelCategoria->all();
      $visao = "frmNoticia";     
      include_once "views/template.php";
    }
    function salvar() {
      $dados = array();
      $dados['id'] = $_POST['id'];
      $dados['titulo'] = $_POST['titulo'];
      $dados['data'] = $_POST['data'];
      $dados['autor'] = $_POST['autor'];
      $dados['categoria_id'] = $_POST['categoria_id'];
      $dados['descricao'] = $_POST['descricao'];
      $model = new Noticia();
      if ($dados['id'] == 0) {
        $model->create($dados);
      } else {
        $model->update($dados);
      }
      header('location: listar');
    }
    function editar($id) {
      $model = new Noticia();
      $dados = $model->getById($id);
      $modelCategoria = new Categoria();
      $categorias = $modelCategoria->all();
      $visao = "frmNoticia";
      include_once "views/template.php";        
    }
    function excluir($id) {
        $model = new Noticia();
        $model->delete($id);
        header('location: '.APP.'noticia/listar');
    }
  }
?>