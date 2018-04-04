<?php ?>
<html>

    <head>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Administrador</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link " href="newEvento.php">Novo Evento </a>
                    <a class="nav-item nav-link active" href="#">Nova Foto<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="crudEvento.php">Gerenciar Eventos</a>
                    <a class="nav-item nav-link" href="../index.html">Ir Para o Site</a>
                </div>
            </div>
        </nav>
        <form style="width: 80%;margin-top: 30px" class="px-4 py-3"  method="post" enctype="multipart/form-data" action="salvaImagem.php">

            <div class="row">
                <div class="form-group col-lg-8">
                    <label > Selecione Imagem </label>
                    <input class="form-control" name="arquivo" type="file" required=""/>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-8">
                    <label > Descrição: </label>
                    <input class="form-control" name="descricao" type="text" />
                </div>
                <div class="form-group col-lg-4">
                    <label > Nome: </label>
                    <input class="form-control" name="nome" type="text" />
                </div>
            </div>




            <br />
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </body>
</html>