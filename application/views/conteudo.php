
    <div class="col-md-9 mt-3">
        
        <div class="row">
            <?php foreach($postagens as $posts):?>

            <div class="col-md-4">

                <div class="card bg-light mb-3" style="max-width: 18rem;">
                  
                  <div class="card-body">
                    <h5 class="card-title"><?= $posts['titulo']; ?></h5>
                    <p class="card-text"><?= $posts['conteudo']; ?></p>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="btn btn-sm btn-outline-success"><?= anchor('home/editar/'.$posts['id'], "Editar")?></button>
            
                    <button type="button" class="btn btn-sm btn-outline-danger"><?= anchor('home/excluir/'.$posts['id'], "Excluir")?></button>
                  </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>