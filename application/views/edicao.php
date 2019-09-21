<section class="container">
	<div class="row">
		<div class="col-md-8">
			<h4 class="h4 mt-4 mb-4">Atualizar Post</h4>

		<form method="post" action="<?= base_url() ?>home/atualizar">
		<input type="hidden" name="id" value="<?= $postagens['id']?>">
		  <div class="form-group">
		    <label>Título</label>
		    <input value="<?= $postagens['titulo']?>" name="titulo" type="text" class="form-control" placeholder="Título">
		  </div>
		  <div class="form-group">
		    <label>Conteúdo</label>
		    <textarea value="<?= $postagens['conteudo']?>" name="conteudo" type="textarea" row="3" class="form-control" placeholder="Conteúdo"></textarea>
		  </div>

		  <input class="btn btn-info" type="submit" value="atualizar">
		</form>
		</div>
	</div>
	
	<?= anchor('home/index', 'Voltar')?> 
</section>


