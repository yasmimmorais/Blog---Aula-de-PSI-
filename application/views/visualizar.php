
<div class="col-md-9">
    <h4 class="h4 mt-3">Post</h4>
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-light mb-3" style="max-width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"><?= $postagens['titulo']; ?></h5>
                <p class="card-text"><?= $postagens['conteudo']; ?></p>
              </div>
              <div class="card-footer">
              	<button type="button" class="btn btn-sm btn-outline-success"><?= anchor('home/editar/'.$postagens['id'], "Editar")?></button>
            
            <button type="button" class="btn btn-sm btn-outline-danger"><?= anchor('home/excluir/'.$postagens['id'], "Excluir")?></button>
              </div>
            </div>
        </div>
    </div>
</div>
