<?php
  class CategoriaController {
    function listar() {
      $model = new Categoria();
      $dados = $model->all();
      $visao = "listagemCategorias";
      include_once "views/template.php";
    }

    function novo() {
      $dados = array();
      $dados['id'] = 0;
      $dados['descricao'] = "";  
      $visao = "frmCategoria";    
      include_once "views/template.php";
    }
    function salvar() {
      $dados = array();
      $dados['id'] = $_POST['id'];
      $dados['descricao'] = $_POST['descricao'];
      $model = new Categoria();
      if ($dados['id'] == 0) {
        $model->create($dados);
      } else {
        $model->update($dados);
      }
      header('location: listar');
    }
    
    function excluir($id) {
      $model = new Categoria();
      $model->delete($id);
      header('location: '.APP.'categoria/listar');
    }    
    function editar($id) {
      $model = new Categoria();
      $dados = $model->getById($id);
      $visao = "frmCategoria";
      include_once "views/template.php";        
    }    

  }
?>