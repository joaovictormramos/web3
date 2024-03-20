      <h1>Formulário de Notícia</h1> 
      <form action="<?php echo APP.'noticia/salvar';?>" method="POST">
      <div class="form-group">
            <label for="id">ID</label>
            <input readonly type="text" class="form-control" id="id" name="id" value="<?php echo $dados['id'];?>">
        </div>
      <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $dados['titulo'];?>">
        </div>
        <div class="form-group">
            <label for="data">Data</label>
            <input type="date" class="form-control" id="data" name="data" value="<?php echo $dados['data'];?>">
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor" value="<?php echo $dados['autor'];?>">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select class="form-select" id="categoria_id" name="categoria_id">
            <?php
              foreach ($categorias as $categoria) {
                $selected = $categoria['id'] == $dados['categoria_id']?'selected':'';
                echo "
                <option $selected value='{$categoria['id']}'>{$categoria['descricao']}</option>                
                ";
              }
            ?>
            
          </select>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="10"><?php echo $dados['descricao'];?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        </form>         