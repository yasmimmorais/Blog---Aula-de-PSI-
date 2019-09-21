<section class="container">
	<div class="row">
		<div class="col-md-8">
			<h4 class="h4 mt-4 mb-4">Novo Post</h4>

		<form method="post" action="<?= base_url() ?>home/salvar">
		  <div class="form-group">
		    <label>Título</label>
		    <input name="titulo" type="text" class="form-control" placeholder="Título">
		  </div>
		  <div class="form-group">
		    <label>Conteúdo</label>
		    <textarea type="textarea" name="conteudo" row="3" class="form-control" placeholder="Conteúdo"></textarea>
		  </div>

		  <input class="btn btn-info" type="submit" value="salvar">
		</form>
		</div>
	</div>
	
	<?= anchor('home/index', 'Voltar')?> 
</section>

