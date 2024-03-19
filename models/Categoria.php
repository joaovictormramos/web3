<?php
  class Categoria {
    protected $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO('pgsql:host=localhost;dbname=web3', 'postgres', 'postgres');
        } catch (PDOException $e) {
            $this->conexao = null;
        }        
    }

    function all() {
        $sql = "SELECT * FROM categoria ORDER BY descricao";
        $sentenca = $this->conexao->query($sql);
        $sentenca->setFetchMode(PDO::FETCH_ASSOC);
        $dados = $sentenca->fetchAll();
        return $dados;
    }

    function create($dados) {
      $sql = "INSERT INTO categoria (descricao) VALUES (:descricao)";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":descricao", $dados['descricao']);
      $sentenca->execute();

    }   
    
    function delete($id) {
      $sql = "DELETE FROM categoria WHERE id=:id";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":id", $id);
      
      $sentenca->execute();      
    }  
    
    function getById($id) {
      $sql = "SELECT * FROM categoria WHERE id=:id";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":id", $id);
      
      $sentenca->execute();      
      $sentenca->setFetchMode(PDO::FETCH_ASSOC);
      $dados = $sentenca->fetch();
      return $dados;      
    }  
    
    function update($dados) {
      $sql = "UPDATE categoria SET  descricao=:descricao WHERE id=:id";
      $sentenca = $this->conexao->prepare($sql);
      $sentenca->bindParam(":descricao", $dados['descricao']);
      $sentenca->bindParam(":id", $dados['id']);

      $sentenca->execute();

    }    
    
  }

?>