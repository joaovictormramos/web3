    <h1>Listagem de Notícias</h1> 
    <a href="novo" class="btn btn-primary">Nova Notícia</a>  
    <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Título</th>
      <th scope="col">Data</th>
      <th scope="col">Autor</th>
      <th scope="col">Categoria</th>
      <th scope="col">Excluir</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($dados as $noticia) {
            $data = date('d/m/Y', strtotime($noticia['data']));
            echo "
            <tr>
                <th scope='row'>{$noticia['id']}</th>
                <td>{$noticia['titulo']}</td>
                <td>$data</td>
                <td>{$noticia['autor']}</td>
                <td>{$noticia['categoria_descricao']}</td>
                <td>
                <a href='excluir/{$noticia['id']}' class='btn btn-danger'>Excluir</a>
                                             
                </td>
                <td>
                <a href='editar/{$noticia['id']}' class='btn btn-primary'>Editar</a>   
                </td>
            </tr>
                        
            ";
            
        }
    ?>


  </tbody>
</table>      