<!doctype html>
<html>
    <head>
        <title>My Blog</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="/assets/imagens/blog-solid.svg"/>
    </head>

    <body>
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <!-- Btn de menu para modo responsivo -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#">My Blog</a>
                    <!-- Só adicionando um espaço para que a busca fique do lado direito da tela -->
                    <div class="navbar-nav mr-auto mt-2 mt-lg-0"></div>

                    <!-- Aqui foi colocado metódo post e um action para ativar o form de busca. -->
                    <form class="form-inline my-2 my-lg-0" method="post" action="<?= base_url(); ?>home/buscar">
                      <input class="form-control mr-sm-2" name="busca" id="busca" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-info my-2 my-sm-0" name="Buscar" id="button_buscar" type="submit">Buscar</button>
                    </form>

                    </div>
                </nav>
            </div>
        </header>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>

</html>
