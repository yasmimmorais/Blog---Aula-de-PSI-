
<!-- Menu de posts -->
<section class="container">
    <div class="row">
        <div class="col-md-3 mt-3">
            <a class="btn btn-info mb-3 btn-lg btn-block" href="<?= base_url('home/novo')?>" role="button">NOVO POST</a>
            <ul class="list-group">
              <li class="list-group-item disabled bg-light" aria-disabled="true">Menu de Posts</li>

              <!-- Até que se tenha posts o foreach deve listar todos os títulos de cada um deles -->
            	<?php foreach($postagens as $posts):?>
                <li class="list-group-item">
                	 <?= anchor('home/visualizar/'.$posts['id'], $posts['titulo']); ?>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    